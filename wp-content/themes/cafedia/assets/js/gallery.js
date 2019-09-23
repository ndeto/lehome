"use strict";
$(document).ready(function () {

    var rows;
    var cols;
    var staggerTime = 150;

    // media query event handler
    if (matchMedia) {
        const mq = window.matchMedia("(max-width: 600px)");
        mq.addListener(WidthChange);
        WidthChange(mq);
    }

    // media query change
    function WidthChange(mq) {
        if (mq.matches) {
            // window width is atmost 600px
            rows = 6; //change this also in css
            cols = 4; //change this also in css
            staggerTime = 150;
        } else {
            // window width is more than 600px
            rows = 4; //change this also in css
            cols = 6; //change this also in css
            staggerTime = 150;
        }

    }


    var urls = [
        "../images/le1.jpg",
        "../images/le2.jpg",
        "../images/le3.jpg",
        "../images/le4.jpg",
        "/images/le21.jpg",
        "/images/le22.jpg",
        "/images/le25.jpg",
        "/images/le26.jpg",
        "/images/le27.jpg",
        "/images/le28.jpg",
        "/images/le30.jpg",
        "/images/le32.jpg",
        "/images/le33.jpg",
        "/images/le34.jpg",
        "/images/le37.jpg",
        "/images/le39.jpg",
        "/images/le43.jpg",
        "/images/le46.jpg",
        "/images/le48.jpg",
        "/images/le50.jpg",
        "/images/lord_2.jpg",
        "/images/lord_3.jpg",
        "/images/le7.jpg",
        "/images/le8.jpg"

    ];

    var $gallery = $(".demo__gallery");
    var $help = $(".demo__help");
    var partsArray = [];
    var reqAnimFr = (function () {
        return window.requestAnimationFrame || function (cb) {
            setTimeout(cb, 1000 / 60);
        }
    })();


    $gallery.html('');
    for (let row = 1; row <= rows; row++) {
        partsArray[row - 1] = [];
        for (let col = 1; col <= cols; col++) {
            $gallery.append(`<div class="show-front demo__part demo__part-${row}-${col}" row="${row}" col="${col}"><div class="demo__part-back"><div class="demo__part-back-inner"></div></div><div class="demo__part-front"></div></div>`);
            partsArray[row - 1][col - 1] = new Part();
        }
    }

    var $parts = $(".demo__part");
    var $image = $(".demo__part-back-inner");
    var help = true;

    for (let i = 0; i < $parts.length; i++) {
        $parts.find(".demo__part-front").eq(i).css("background-image", `url(${urls[i]})`);
    }

    $gallery.on("click", ".demo__part-front", function () {

        $image.css("background-image", $(this).css("background-image"));
        if (help) {
            $help.html("Click any of the tiles to get back");
            help = false;
        }

        let row = +$(this).closest(".demo__part").attr("row");
        let col = +$(this).closest(".demo__part").attr("col");
        waveChange(row, col);
    });

    $gallery.on("click", ".demo__part-back", function () {
        if (!isShowingBack()) return;



        setTimeout(function () {
            for (let row = 1; row <= rows; row++) {
                for (let col = 1; col <= cols; col++) {
                    partsArray[row - 1][col - 1].showing = "front";
                }
            }
        }, staggerTime + $parts.length * staggerTime / 10);


        showFront(0, $parts.length);

    });

    function showFront(i, maxI) {
        if (i >= maxI) return;
        $parts.eq(i).addClass("show-front");

        reqAnimFr(function () {
            showFront(i + 1);
        });
    }

    function isShowingBack() {
        return partsArray[0][0].showing == "back" && partsArray[0][cols - 1].showing == "back" && partsArray[rows - 1][0].showing == "back" && partsArray[rows - 1][cols - 1].showing == "back";
    }

    function Part() {
        this.showing = "front";
    }

    function waveChange(rowN, colN) {
        if (rowN > rows || colN > cols || rowN <= 0 || colN <= 0) return;
        if (partsArray[rowN - 1][colN - 1].showing == "back") return;
        $(".demo__part-" + rowN + "-" + colN).removeClass("show-front");
        partsArray[rowN - 1][colN - 1].showing = "back";
        setTimeout(function () {
            waveChange(rowN + 1, colN);
            waveChange(rowN - 1, colN);
            waveChange(rowN, colN + 1);
            waveChange(rowN, colN - 1);
        }, staggerTime);
    }
});