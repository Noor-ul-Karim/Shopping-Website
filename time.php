<?php
echo <<< END
<html>
<head>
<style>

html,body {
    padding:0;
    margin:0;
    background:#fafafa;
    text-align:center;
}

body {
    padding-top:3em;
}

h1,
h2 {
    margin-bottom:3rem;
    font-family:sans-serif;
    color:#666;
}

h2 {
    margin-top:2em;
}

.clock {
    position:relative;
    font-family:monaco,consolas,"courier new",monospace;
    font-size:3.5rem;
    line-height:1.375;
}

.clock:before,
.clock:after {
    position:absolute;
    top:0;
    bottom:0;
    content:':';
    z-index:2;
    line-height:1.15;
    color:#333;
}

.clock:before {
    left:2.325em;
}

.clock:after {
    right:2.325em;
}

.clock span {
    position:relative;
    display:inline-block;
    padding:0 .25em;
    margin:0 .06125em;
    z-index:1;

    -webkit-transform:perspective(750);
    -moz-transform:perspective(750);
    -ms-transform:perspective(750);
    transform:perspective(750);

    -webkit-transform-style:preserve-3d;
    -moz-transform-style:preserve-3d;
    -ms-transform-style:preserve-3d;
    transform-style:preserve-3d;
}

.clock span:first-child {
    margin-left:0;
}

.clock span:last-child {
    margin-right:0;
}

.clock span:nth-child(2),
.clock span:nth-child(4) {
    margin-right:.3em;
}

.clock span:nth-child(3),
.clock span:nth-child(5) {
    margin-left:.3em;
}

.clock span:before,
.clock span:after {
    position:absolute;
    left:0;
    top:0;
    right:0;
    bottom:0;
    color:#eee;
    text-shadow:0 1px 0 #fff;
    background:#333;
    border-radius:.125em;
    outline:1px solid transparent; /* fix jagged edges in ff */

    -webkit-backface-visibility:hidden;
    -moz-backface-visibility:hidden;
    -ms-backface-visibility:hidden;
    backface-visibility:hidden;

    -webkit-transition:-webkit-transform .75s, opacity .75s;
    -moz-transition:-moz-transform .75s, opacity .75s;
    -ms-transition:-ms-transform .75s, opacity .75s;
    transition:transform .75s, opacity .75s;
}

.clock span:before {
    opacity:1;
    z-index:1;
    content:attr(data-old);

    -webkit-transform-origin:0 0;
    -moz-transform-origin:0 0;
    -ms-transform-origin:0 0;
    transform-origin:0 0;

    -webkit-transform:translate3d(0,0,0) rotateX(0);
    -moz-transform:translate3d(0,0,0) rotateX(0);
    -ms-transform:translate3d(0,0,0) rotateX(0);
    transform:translate3d(0,0,0) rotateX(0);
}

.clock span:after {
    opacity:0;
    z-index:2;
    content:attr(data-now);

    -webkit-transform-origin:0 100%;
    -moz-transform-origin:0 100%;
    -ms-transform-origin:0 100%;
    transform-origin:0 100%;

    -webkit-transform:translate3d(0,-102.5%,0) rotateX(90deg);
    -moz-transform:translate3d(0,-102.5%,0) rotateX(90deg);
    -ms-transform:translate3d(0,-102.5%,0) rotateX(90deg);
    transform:translate3d(0,-102.5%,0) rotateX(90deg);
}

.clock .flip:before {
    opacity:0;
    -webkit-transform:translate3d(0,102.5%,0) rotateX(-90deg);
    -moz-transform:translate3d(0,102.5%,0) rotateX(-90deg);
    -ms-transform:translate3d(0,102.5%,0) rotateX(-90deg);
    transform:translate3d(0,102.5%,0) rotateX(-90deg);
}

.clock .flip:after {
    opacity:1;
    -webkit-transform:translate3d(0,0,0) rotateX(0);
    -moz-transform:translate3d(0,0,0) rotateX(0);
    -ms-transform:translate3d(0,0,0) rotateX(0);
    transform:translate3d(0,0,0) rotateX(0);
}


</style>
<script>

var Clock = (function(){

    var exports = function(element) {
        this._element = element;
        var html = '';
        for (var i=0;i<6;i++) {
            html += '<span>&nbsp;</span>';
        }
        this._element.innerHTML = html;
        this._slots = this._element.getElementsByTagName('span');
        this._tick();
    };

    exports.prototype = {

        _tick:function() {
            var time = new Date();
            this._update(this._pad(time.getHours()) + this._pad(time.getMinutes()) + this._pad(time.getSeconds()));
            var self = this;
            setTimeout(function(){
                self._tick();
            },1000);
        },

        _pad:function(value) {
            return ('0' + value).slice(-2);
        },

        _update:function(timeString) {

            var i=0,l=this._slots.length,value,slot,now;
            for (;i<l;i++) {

                value = timeString.charAt(i);
                slot = this._slots[i];
                now = slot.dataset.now;

                if (!now) {
                    slot.dataset.now = value;
                    slot.dataset.old = value;
                    continue;
                }

                if (now !== value) {
                    this._flip(slot,value);
                }
            }
        },

        _flip:function(slot,value) {

            // setup new state
            slot.classList.remove('flip');
            slot.dataset.old = slot.dataset.now;
            slot.dataset.now = value;

            // force dom reflow
            slot.offsetLeft;

            // start flippin
            slot.classList.add('flip');

        }

    };

    return exports;
}());

var i=0,clocks = document.querySelectorAll('.clock'),l=clocks.length;
for (;i<l;i++) {
    new Clock(clocks[i]);
}

</script>
</head>

<body >

<span class="clock"></span>
</body>
</html>
END;
?>
