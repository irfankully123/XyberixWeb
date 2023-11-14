function videoRun() {
    if ($(document).find("div").hasClass("popupVideo")) {
        var $theVideo = videoId($('.popupVideo'));
        if ($theVideo) {
            $("body")
                .append(
                    '<div class="active" id="video-wrap"><span class="video-overlay"></span><div class="video-container">' +
                    $theVideo +
                    '</div><button class="close-video">x</button></div>'
                )
            .addClass("active");
        }

        $(document).on("click", ".close-video, .video-overlay", function () {
            $("#video-wrap").remove();
        });
    }
}


function videoId(button) {
    var $videoUrl = button.attr("data-video");
    if ($videoUrl !== undefined) {
        var $videoUrl = $videoUrl.toString();
        var srcVideo;

        if ($videoUrl.indexOf("youtube") !== -1) {
            var et = $videoUrl.lastIndexOf("&");
            if (et !== -1) {
                $videoUrl = $videoUrl.substring(0, et);
            }
            var embed = $videoUrl.indexOf("embed");
            if (embed !== -1) {
                $videoUrl =
                    "https://www.youtube.com/watch?v=" +
                    $videoUrl.substring(embed + 6, embed + 17);
            }

            srcVideo =
                "https://www.youtube.com/embed/" +
                $videoUrl.substring($videoUrl.length - 11, $videoUrl.length) +
                "?autoplay=1&mute=0&loop=1&playlist=" +
                $videoUrl.substring($videoUrl.length - 11, $videoUrl.length) +
                "";
        } else if ($videoUrl.indexOf("youtu") !== -1) {
            var et = $videoUrl.lastIndexOf("&");
            if (et !== -1) {
                $videoUrl = $videoUrl.substring(0, et);
            }
            var embed = $videoUrl.indexOf("embed");
            if (embed !== -1) {
                $videoUrl =
                    "https://youtu.be/" + $videoUrl.substring(embed + 6, embed + 17);
            }

            srcVideo =
                "https://www.youtube.com/embed/" +
                $videoUrl.substring($videoUrl.length - 11, $videoUrl.length) +
                "?autoplay=1&mute=1&loop=1&playlist=" +
                $videoUrl.substring($videoUrl.length - 11, $videoUrl.length) +
                "";
        } else if ($videoUrl.indexOf("vimeo") !== -1) {
            srcVideo =
                "https://player.vimeo.com/video/" +
                $videoUrl
                    .substring($videoUrl.indexOf(".com") + 5, $videoUrl.length)
                    .replace("/", "") +
                "?autoplay=1";
        } else if ($videoUrl.indexOf("mp4") !== -1) {
            return (
                '<video loop playsinline autoplay><source src="' +
                $videoUrl +
                '" type="video/mp4"></video>'
            );
        } else if ($videoUrl.indexOf("m4v") !== -1) {
            return (
                '<video loop playsinline autoplay><source src="' +
                $videoUrl +
                '" type="video/mp4"></video>'
            );
        } else {
            alert(
                "The video assigned is not from Youtube, Vimeo or MP4, remember to enter the correct complete video link .\n - Youtube: https://www.youtube.com/watch?v=43ngkc2Ejgw\n - Vimeo: https://vimeo.com/111939668\n - MP4 https://server.com/file.mp4"
            );
            return false;
        }
        return (
            '<iframe src="' +
            srcVideo +
            '" allow="autoplay" allowfullscreen frameborder="0"></iframe>'
        );
    } else {
        alert("No video assigned.");
        return false;
    }
}


// setTimeout(function () {
//     $('.lets-play').trigger('click');
// }, 4000);
