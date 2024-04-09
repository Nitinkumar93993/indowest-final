//  <!-- #### Feedback modal script start #### -->

document.addEventListener("DOMContentLoaded", function () {
    var openModalBtn = document.getElementById("openModalBtn");
    var closeModalBtn = document.getElementById("closeModalBtn");
    var modal = document.getElementById("myModal");
    var form = document.getElementById("myForm");

    openModalBtn.onclick = function () {
        modal.style.display = "block";
    };

    closeModalBtn.onclick = function () {
        modal.style.display = "none";
    };

    form.addEventListener("submit", function (event) {
        event.preventDefault();

        // Add your form submission logic here
        var countryCode = document.getElementById("countryCode").value;
        var phoneNumber = document.getElementById("phoneNumber").value;

        // Example: Log the values to the console
        console.log("Country Code:", countryCode);
        console.log("Phone Number:", phoneNumber);

        // You can add further processing or AJAX calls here
        // Reset the form or close the modal if needed
        // form.reset();
        // modal.style.display = 'none';
    });
});

// <!-- #### Feedback modal script end #### -->
// <!-- #### complaint modal script start #### -->

function openModal() {
    document.getElementById("alterHang").style.display = "flex";
    document.getElementById("premitiveOne").style.position = "static";
}

document.getElementById("closeBtn").addEventListener("click", function () {
    document.getElementById("alterHang").style.display = "none";
});

// <!-- #### complaint modal script end #### -->
// <!-- #### login/register modal script start #### -->

function openLogin() {
    document.getElementById("loginRegisterform").style.display = "flex";
    document.getElementById("premitiveOne").style.position = "static";
}

document.getElementById("closeLogin").addEventListener("click", function () {
    document.getElementById("loginRegisterform").style.display = "none";
});

// <!-- #### login/register  modal script end #### -->

// Get the modal
var modal = document.getElementById("id01");

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
};

// TOP NAV SECTION LOGIN/REGISTER JS
var newchapter = document.getElementById("newchapter");
var secondchapter = document.getElementById("secondchapter");
var thirdchapter = document.getElementById("thirdchapter");
document.addEventListener("DOMContentLoaded", function () {
    var selectBranchHead = document.getElementById("mySelect");
    selectBranchHead.addEventListener("change", pressHere);

    function pressHere() {
        var selectedValue = selectBranchHead.value;
        if (selectedValue === "me") {
            newchapter.style.display = "block";
            secondchapter.style.display = "none";
            thirdchapter.style.display = "none";
        }
    }
});

document.addEventListener("DOMContentLoaded", function () {
    var alterNativethird = document.getElementById("mySelect");
    alterNativethird.addEventListener("change", doubletap);
    function doubletap() {
        var selectedValue = alterNativethird.value;
        if (selectedValue === "canumber") {
            newchapter.style.display = "none";
            secondchapter.style.display = "none";
            thirdchapter.style.display = "block";
        }
    }
});

document.addEventListener("DOMContentLoaded", function () {
    var capilitizeSecond = document.getElementById("mySelect");
    capilitizeSecond.addEventListener("change", doubletap);
    function doubletap() {
        var selectedValue = capilitizeSecond.value;
        if (selectedValue === "meemail") {
            newchapter.style.display = "none";
            secondchapter.style.display = "block";
            thirdchapter.style.display = "none";
        }
    }
});
// TOP NAV SECTION LOGIN/REGISTER JS

// <!-- #### register modal script start #### -->

function openRegister() {
    document.getElementById("RegisterAlgform").style.display = "flex";
    document.getElementById("premitiveOne").style.position = "static";
}

document
    .getElementById("closeRegisteralg")
    .addEventListener("click", function () {
        document.getElementById("RegisterAlgform").style.display = "none";
    });

// <!-- #### register  modal script end #### -->

document.getElementById("phoneNumber").addEventListener("input", function () {
    var phoneNumber = document.getElementById("phoneNumber").value.trim();
    // Check if the phone number is entered
    if (phoneNumber.length > 0) {
        // Show the registration form
        document.getElementById("registrationForm").style.display = "block";
    } else {
        // Hide the registration form if no phone number is entered
        document.getElementById("registrationForm").style.display = "none";
    }
});

function openRegistrationForm() {
    // Get the phone number entered by the user
    var phoneNumber = document.getElementById("phoneNumber").value;

    // Validate the phone number (you can add your validation logic here)

    // Hide the initial form
    document.getElementById("initialForm").style.display = "none";

    // Display the registration form
    document.getElementById("registrationForm").style.display = "block";

    // You can perform additional actions here such as pre-filling the new form fields with the phone number entered
}

// time line decond section javascript home page

(function () {
    // Swipe Content Plugin - by CodyHouse.co
    // https://codyhouse.co/ds/components/info/swipe-content
    var SwipeContent = function (element) {
        this.element = element;
        this.delta = [false, false];
        this.dragging = false;
        this.intervalId = false;
        initSwipeContent(this);
    };

    function initSwipeContent(content) {
        content.element.addEventListener(
            "mousedown",
            handleEvent.bind(content)
        );
        content.element.addEventListener(
            "touchstart",
            handleEvent.bind(content)
        );
    }

    function initDragging(content) {
        //add event listeners
        content.element.addEventListener(
            "mousemove",
            handleEvent.bind(content)
        );
        content.element.addEventListener(
            "touchmove",
            handleEvent.bind(content)
        );
        content.element.addEventListener("mouseup", handleEvent.bind(content));
        content.element.addEventListener(
            "mouseleave",
            handleEvent.bind(content)
        );
        content.element.addEventListener("touchend", handleEvent.bind(content));
    }

    function cancelDragging(content) {
        //remove event listeners
        if (content.intervalId) {
            !window.requestAnimationFrame
                ? clearInterval(content.intervalId)
                : window.cancelAnimationFrame(content.intervalId);
            content.intervalId = false;
        }
        content.element.removeEventListener(
            "mousemove",
            handleEvent.bind(content)
        );
        content.element.removeEventListener(
            "touchmove",
            handleEvent.bind(content)
        );
        content.element.removeEventListener(
            "mouseup",
            handleEvent.bind(content)
        );
        content.element.removeEventListener(
            "mouseleave",
            handleEvent.bind(content)
        );
        content.element.removeEventListener(
            "touchend",
            handleEvent.bind(content)
        );
    }

    function handleEvent(event) {
        switch (event.type) {
            case "mousedown":
            case "touchstart":
                startDrag(this, event);
                break;
            case "mousemove":
            case "touchmove":
                drag(this, event);
                break;
            case "mouseup":
            case "mouseleave":
            case "touchend":
                endDrag(this, event);
                break;
        }
    }

    function startDrag(content, event) {
        content.dragging = true;
        // listen to drag movements
        initDragging(content);
        content.delta = [
            parseInt(unify(event).clientX),
            parseInt(unify(event).clientY),
        ];
        // emit drag start event
        emitSwipeEvents(content, "dragStart", content.delta);
    }

    function endDrag(content, event) {
        cancelDragging(content);
        // credits: https://css-tricks.com/simple-swipe-with-vanilla-javascript/
        var dx = parseInt(unify(event).clientX),
            dy = parseInt(unify(event).clientY);

        // check if there was a left/right swipe
        if (content.delta && (content.delta[0] || content.delta[0] === 0)) {
            var s = Math.sign(dx - content.delta[0]);

            if (Math.abs(dx - content.delta[0]) > 30) {
                s < 0
                    ? emitSwipeEvents(content, "swipeLeft", [dx, dy])
                    : emitSwipeEvents(content, "swipeRight", [dx, dy]);
            }

            content.delta[0] = false;
        }
        // check if there was a top/bottom swipe
        if (content.delta && (content.delta[1] || content.delta[1] === 0)) {
            var y = Math.sign(dy - content.delta[1]);

            if (Math.abs(dy - content.delta[1]) > 30) {
                y < 0
                    ? emitSwipeEvents(content, "swipeUp", [dx, dy])
                    : emitSwipeEvents(content, "swipeDown", [dx, dy]);
            }

            content.delta[1] = false;
        }
        // emit drag end event
        emitSwipeEvents(content, "dragEnd", [dx, dy]);
        content.dragging = false;
    }

    function drag(content, event) {
        if (!content.dragging) return;
        // emit dragging event with coordinates
        !window.requestAnimationFrame
            ? (content.intervalId = setTimeout(function () {
                  emitDrag.bind(content, event);
              }, 250))
            : (content.intervalId = window.requestAnimationFrame(
                  emitDrag.bind(content, event)
              ));
    }

    function emitDrag(event) {
        emitSwipeEvents(this, "dragging", [
            parseInt(unify(event).clientX),
            parseInt(unify(event).clientY),
        ]);
    }

    function unify(event) {
        // unify mouse and touch events
        return event.changedTouches ? event.changedTouches[0] : event;
    }

    function emitSwipeEvents(content, eventName, detail) {
        // emit event with coordinates
        var event = new CustomEvent(eventName, {
            detail: { x: detail[0], y: detail[1] },
        });
        content.element.dispatchEvent(event);
    }

    window.SwipeContent = SwipeContent;

    //initialize the SwipeContent objects
    var swipe = document.getElementsByClassName("js-swipe-content");
    if (swipe.length > 0) {
        for (var i = 0; i < swipe.length; i++) {
            (function (i) {
                new SwipeContent(swipe[i]);
            })(i);
        }
    }
})();

// Utility function
function Util() {}

/*
            class manipulation functions
        */
Util.hasClass = function (el, className) {
    if (el.classList) return el.classList.contains(className);
    else
        return !!el.className.match(
            new RegExp("(\\s|^)" + className + "(\\s|$)")
        );
};

Util.addClass = function (el, className) {
    var classList = className.split(" ");
    if (el.classList) el.classList.add(classList[0]);
    else if (!Util.hasClass(el, classList[0]))
        el.className += " " + classList[0];
    if (classList.length > 1) Util.addClass(el, classList.slice(1).join(" "));
};

Util.removeClass = function (el, className) {
    var classList = className.split(" ");
    if (el.classList) el.classList.remove(classList[0]);
    else if (Util.hasClass(el, classList[0])) {
        var reg = new RegExp("(\\s|^)" + classList[0] + "(\\s|$)");
        el.className = el.className.replace(reg, " ");
    }
    if (classList.length > 1)
        Util.removeClass(el, classList.slice(1).join(" "));
};

Util.toggleClass = function (el, className, bool) {
    if (bool) Util.addClass(el, className);
    else Util.removeClass(el, className);
};

Util.setAttributes = function (el, attrs) {
    for (var key in attrs) {
        el.setAttribute(key, attrs[key]);
    }
};

/*
          DOM manipulation
        */
Util.getChildrenByClassName = function (el, className) {
    var children = el.children,
        childrenByClass = [];
    for (var i = 0; i < el.children.length; i++) {
        if (Util.hasClass(el.children[i], className))
            childrenByClass.push(el.children[i]);
    }
    return childrenByClass;
};

/*
            Animate height of an element
        */
Util.setHeight = function (start, to, element, duration, cb) {
    var change = to - start,
        currentTime = null;

    var animateHeight = function (timestamp) {
        if (!currentTime) currentTime = timestamp;
        var progress = timestamp - currentTime;
        var val = parseInt((progress / duration) * change + start);
        element.setAttribute("style", "height:" + val + "px;");
        if (progress < duration) {
            window.requestAnimationFrame(animateHeight);
        } else {
            cb();
        }
    };

    //set the height of the element before starting animation -> fix bug on Safari
    element.setAttribute("style", "height:" + start + "px;");
    window.requestAnimationFrame(animateHeight);
};

/*
            Smooth Scroll
        */

Util.scrollTo = function (final, duration, cb) {
    var start = window.scrollY || document.documentElement.scrollTop,
        currentTime = null;

    var animateScroll = function (timestamp) {
        if (!currentTime) currentTime = timestamp;
        var progress = timestamp - currentTime;
        if (progress > duration) progress = duration;
        var val = Math.easeInOutQuad(progress, start, final - start, duration);
        window.scrollTo(0, val);
        if (progress < duration) {
            window.requestAnimationFrame(animateScroll);
        } else {
            cb && cb();
        }
    };

    window.requestAnimationFrame(animateScroll);
};

/*
          Focus utility classes
        */

//Move focus to an element
Util.moveFocus = function (element) {
    if (!element) element = document.getElementsByTagName("body")[0];
    element.focus();
    if (document.activeElement !== element) {
        element.setAttribute("tabindex", "-1");
        element.focus();
    }
};

/*
          Misc
        */

Util.getIndexInArray = function (array, el) {
    return Array.prototype.indexOf.call(array, el);
};

Util.cssSupports = function (property, value) {
    if ("CSS" in window) {
        return CSS.supports(property, value);
    } else {
        var jsProperty = property.replace(/-([a-z])/g, function (g) {
            return g[1].toUpperCase();
        });
        return jsProperty in document.body.style;
    }
};

/*
            Polyfills
        */
//Closest() method
if (!Element.prototype.matches) {
    Element.prototype.matches =
        Element.prototype.msMatchesSelector ||
        Element.prototype.webkitMatchesSelector;
}

if (!Element.prototype.closest) {
    Element.prototype.closest = function (s) {
        var el = this;
        if (!document.documentElement.contains(el)) return null;
        do {
            if (el.matches(s)) return el;
            el = el.parentElement || el.parentNode;
        } while (el !== null && el.nodeType === 1);
        return null;
    };
}

//Custom Event() constructor
if (typeof window.CustomEvent !== "function") {
    function CustomEvent(event, params) {
        params = params || {
            bubbles: false,
            cancelable: false,
            detail: undefined,
        };
        var evt = document.createEvent("CustomEvent");
        evt.initCustomEvent(
            event,
            params.bubbles,
            params.cancelable,
            params.detail
        );
        return evt;
    }

    CustomEvent.prototype = window.Event.prototype;

    window.CustomEvent = CustomEvent;
}

/*
            Animation curves
        */
Math.easeInOutQuad = function (t, b, c, d) {
    t /= d / 2;
    if (t < 1) return (c / 2) * t * t + b;
    t--;
    return (-c / 2) * (t * (t - 2) - 1) + b;
};

/* Main js */
/* -----------------*/
(function () {
    // Horizontal Timeline - by CodyHouse.co
    var HorizontalTimeline = function (element) {
        this.element = element;
        this.datesContainer =
            this.element.getElementsByClassName("h--timeline-dates")[0];
        this.line =
            this.datesContainer.getElementsByClassName("h--timeline-line")[0]; // grey line in the top timeline section
        this.fillingLine = this.datesContainer.getElementsByClassName(
            "h--timeline-filling-line"
        )[0]; // green filling line in the top timeline section
        this.date = this.line.getElementsByClassName("h--timeline-date");
        this.selectedDate = this.line.getElementsByClassName(
            "h--timeline-date--selected"
        )[0];
        this.dateValues = parseDate(this);
        this.minLapse = calcMinLapse(this);
        this.navigation = this.element.getElementsByClassName(
            "h--timeline-navigation"
        );
        this.contentWrapper =
            this.element.getElementsByClassName("h--timeline-events")[0];
        this.content =
            this.contentWrapper.getElementsByClassName("h--timeline-event");

        this.eventsMinDistance = 80; // min distance between two consecutive events (in px)
        this.eventsMaxDistance = 160; // max distance between two consecutive events (in px)
        this.translate = 0; // this will be used to store the translate value of this.line
        this.lineLength = 0; //total length of this.line

        // store index of selected and previous selected dates
        this.oldDateIndex = Util.getIndexInArray(this.date, this.selectedDate);
        this.newDateIndex = this.oldDateIndex;

        initTimeline(this);
        initEvents(this);
    };

    function initTimeline(timeline) {
        // set dates left position
        var left = 0;
        for (var i = 0; i < timeline.dateValues.length; i++) {
            var j = i == 0 ? 0 : i - 1;
            var distance = daydiff(
                    timeline.dateValues[j],
                    timeline.dateValues[i]
                ),
                distanceNorm =
                    (Math.round(distance / timeline.minLapse) + 2) *
                    timeline.eventsMinDistance,
                containerWidth = timeline.datesContainer.offsetWidth,
                distanceCorrecture = 0;

            if (distanceNorm < timeline.eventsMinDistance) {
                distanceNorm = timeline.eventsMaxDistance;
            } else if (distanceNorm > timeline.eventsMaxDistance) {
                distanceNorm = timeline.eventsMinDistance;
            }
            left = left + distanceNorm;
            timeline.date[i].setAttribute("style", "left:" + left + "px");
        }

        // set line/filling line dimensions
        timeline.line.style.width =
            left + timeline.eventsMinDistance + distanceCorrecture + "px";
        timeline.lineLength =
            left + timeline.eventsMinDistance + distanceCorrecture;

        // add 100px more to line/filling line if container bigger then timeline lineLength
        if (containerWidth > timeline.lineLength) {
            timeline.line.style.width =
                left + timeline.eventsMinDistance + distanceCorrecture + "px";
            timeline.lineLength = timeline.lineLength + distanceCorrecture;
        }

        // reveal timeline
        Util.addClass(timeline.element, "h--timeline--loaded");
        selectNewDate(timeline, timeline.selectedDate);
        resetTimelinePosition(timeline, "next");
    }

    function initEvents(timeline) {
        var self = timeline;
        // deaktivate the buttons
        deaktivateNavigationButtons(self);

        // click on arrow navigation
        self.navigation[0].addEventListener("click", function (event) {
            event.preventDefault();
            translateTimeline(self, "prev");
            deaktivateNavigationButtons(self);
        });
        self.navigation[1].addEventListener("click", function (event) {
            event.preventDefault();
            translateTimeline(self, "next");
            deaktivateNavigationButtons(self);
        });

        //swipe on timeline
        new SwipeContent(self.datesContainer);
        self.datesContainer.addEventListener("swipeLeft", function (event) {
            translateTimeline(self, "next");
        });
        self.datesContainer.addEventListener("swipeRight", function (event) {
            translateTimeline(self, "prev");
        });

        //select a new event
        for (var i = 0; i < self.date.length; i++) {
            (function (i) {
                self.date[i].addEventListener("click", function (event) {
                    event.preventDefault();
                    selectNewDate(self, event.target);
                });

                self.content[i].addEventListener(
                    "animationend",
                    function (event) {
                        if (
                            i == self.newDateIndex &&
                            self.newDateIndex != self.oldDateIndex
                        )
                            resetAnimation(self);
                    }
                );
            })(i);
        }
    }

    function updateFilling(timeline) {
        // update fillingLine scale value
        var dateStyle = window.getComputedStyle(timeline.selectedDate, null),
            left = dateStyle.getPropertyValue("left"),
            width = dateStyle.getPropertyValue("width");

        left =
            Number(left.replace("px", "")) +
            Number(width.replace("px", "")) / 2;
        timeline.fillingLine.style.transform =
            "scaleX(" + left / timeline.lineLength + ")";
    }

    function translateTimeline(timeline, direction) {
        // translate timeline (and date elements)
        var containerWidth = timeline.datesContainer.offsetWidth;
        if (direction) {
            timeline.translate =
                direction == "next"
                    ? timeline.translate -
                      containerWidth +
                      timeline.eventsMinDistance
                    : timeline.translate +
                      containerWidth -
                      timeline.eventsMinDistance;
        }
        if (0 - timeline.translate > timeline.lineLength - containerWidth)
            timeline.translate = containerWidth - timeline.lineLength;
        if (timeline.translate > 0) timeline.translate = 0;

        timeline.line.style.transform =
            "translateX(" + timeline.translate + "px)";
        // update the navigation items status (toggle inactive class)
        timeline.translate == 0
            ? Util.addClass(
                  timeline.navigation[0],
                  "h--timeline-navigation--inactive"
              )
            : Util.removeClass(
                  timeline.navigation[0],
                  "h--timeline-navigation--inactive"
              );
        timeline.translate == containerWidth - timeline.lineLength
            ? Util.addClass(
                  timeline.navigation[1],
                  "h--timeline-navigation--inactive"
              )
            : Util.removeClass(
                  timeline.navigation[1],
                  "h--timeline-navigation--inactive"
              );
    }

    function deaktivateNavigationButtons(timeline) {
        var containerWidth = timeline.datesContainer.offsetWidth;
        // deaktivate next button if container bigger then timeline lineLength
        if (containerWidth >= timeline.lineLength) {
            Util.addClass(
                timeline.navigation[0],
                "h--timeline-navigation--inactive"
            );
            Util.addClass(
                timeline.navigation[1],
                "h--timeline-navigation--inactive"
            );
        }
    }

    function selectNewDate(timeline, target) {
        // ned date has been selected -> update timeline
        timeline.newDateIndex = Util.getIndexInArray(timeline.date, target);
        timeline.oldDateIndex = Util.getIndexInArray(
            timeline.date,
            timeline.selectedDate
        );
        Util.removeClass(timeline.selectedDate, "h--timeline-date--selected");
        Util.addClass(
            timeline.date[timeline.newDateIndex],
            "h--timeline-date--selected"
        );
        timeline.selectedDate = timeline.date[timeline.newDateIndex];
        updateOlderEvents(timeline);
        updateVisibleContent(timeline);
        updateFilling(timeline);
    }

    function updateOlderEvents(timeline) {
        // update older events style
        for (var i = 0; i < timeline.date.length; i++) {
            i < timeline.newDateIndex
                ? Util.addClass(
                      timeline.date[i],
                      "h--timeline-date--older-event"
                  )
                : Util.removeClass(
                      timeline.date[i],
                      "h--timeline-date--older-event"
                  );
        }
    }

    function updateVisibleContent(timeline) {
        // show content of new selected date
        if (timeline.newDateIndex > timeline.oldDateIndex) {
            var classEntering =
                    "h--timeline-event--selected h--timeline-event--enter-right",
                classLeaving = "h--timeline-event--leave-left";
        } else if (timeline.newDateIndex < timeline.oldDateIndex) {
            var classEntering =
                    "h--timeline-event--selected h--timeline-event--enter-left",
                classLeaving = "h--timeline-event--leave-right";
        } else {
            var classEntering = "h--timeline-event--selected",
                classLeaving = "";
        }

        Util.addClass(timeline.content[timeline.newDateIndex], classEntering);
        if (timeline.newDateIndex != timeline.oldDateIndex) {
            Util.removeClass(
                timeline.content[timeline.oldDateIndex],
                "h--timeline-event--selected"
            );
            Util.addClass(
                timeline.content[timeline.oldDateIndex],
                classLeaving
            );
            //timeline.contentWrapper.style.height = timeline.content[timeline.newDateIndex].offsetHeight + 'px';
        }
    }

    function resetAnimation(timeline) {
        // reset content classes when entering animation is over
        //timeline.contentWrapper.style.height = null;
        Util.removeClass(
            timeline.content[timeline.newDateIndex],
            "h--timeline-event--enter-right h--timeline-event--enter-left"
        );
        Util.removeClass(
            timeline.content[timeline.oldDateIndex],
            "h--timeline-event--leave-right h--timeline-event--leave-left"
        );
    }

    function keyNavigateTimeline(timeline, direction) {
        // navigate the timeline using the keyboard
        var newIndex =
            direction == "next"
                ? timeline.newDateIndex + 1
                : timeline.newDateIndex - 1;
        if (newIndex < 0 || newIndex >= timeline.date.length) return;
        selectNewDate(timeline, timeline.date[newIndex]);
        resetTimelinePosition(timeline, direction);
    }

    function resetTimelinePosition(timeline, direction) {
        //translate timeline according to new selected event position
        var eventStyle = window.getComputedStyle(timeline.selectedDate, null),
            eventLeft = Number(
                eventStyle.getPropertyValue("left").replace("px", "")
            ),
            timelineWidth = timeline.datesContainer.offsetWidth;

        if (
            (direction == "next" &&
                eventLeft >= timelineWidth - timeline.translate) ||
            (direction == "prev" && eventLeft <= -timeline.translate)
        ) {
            timeline.translate = timelineWidth / 2 - eventLeft;
            translateTimeline(timeline, false);
        }
    }

    function parseDate(timeline) {
        // get timestamp value for each date
        var dateArrays = [];
        for (var i = 0; i < timeline.date.length; i++) {
            var singleDate = timeline.date[i].getAttribute("data-date"),
                dateComp = singleDate.split("T");

            if (dateComp.length > 1) {
                //both DD/MM/YEAR and time are provided
                var dayComp = dateComp[0].split("/"),
                    timeComp = dateComp[1].split(":");
            } else if (dateComp[0].indexOf(":") >= 0) {
                //only time is provide
                var dayComp = ["2000", "0", "0"],
                    timeComp = dateComp[0].split(":");
            } else {
                //only DD/MM/YEAR
                var dayComp = dateComp[0].split("/"),
                    timeComp = ["0", "0"];
            }
            var newDate = new Date(
                dayComp[2],
                dayComp[1] - 1,
                dayComp[0],
                timeComp[0],
                timeComp[1]
            );
            dateArrays.push(newDate);
        }
        return dateArrays;
    }

    function calcMinLapse(timeline) {
        // determine the minimum distance among events
        var dateDistances = [];
        for (var i = 1; i < timeline.dateValues.length; i++) {
            var distance = daydiff(
                timeline.dateValues[i - 1],
                timeline.dateValues[i]
            );
            if (distance > 0) dateDistances.push(distance);
        }

        return dateDistances.length > 0
            ? Math.min.apply(null, dateDistances)
            : 86400000;
    }

    function daydiff(first, second) {
        // time distance between events
        return Math.round(second - first);
    }

    window.HorizontalTimeline = HorizontalTimeline;

    var horizontalTimeline = document.getElementsByClassName("js-h--timeline"),
        horizontalTimelineTimelineArray = [];
    if (horizontalTimeline.length > 0) {
        for (var i = 0; i < horizontalTimeline.length; i++) {
            horizontalTimelineTimelineArray.push(
                new HorizontalTimeline(horizontalTimeline[i])
            );
        }
        // navigate the timeline when inside the viewport using the keyboard
        document.addEventListener("keydown", function (event) {
            if (
                (event.keyCode && event.keyCode == 39) ||
                (event.key && event.key.toLowerCase() == "arrowright")
            ) {
                updateHorizontalTimeline("next"); // move to next event
            } else if (
                (event.keyCode && event.keyCode == 37) ||
                (event.key && event.key.toLowerCase() == "arrowleft")
            ) {
                updateHorizontalTimeline("prev"); // move to prev event
            }
        });
    }

    function updateHorizontalTimeline(direction) {
        for (var i = 0; i < horizontalTimelineTimelineArray.length; i++) {
            if (elementInViewport(horizontalTimeline[i]))
                keyNavigateTimeline(
                    horizontalTimelineTimelineArray[i],
                    direction
                );
        }
    }

    /*
                How to tell if a DOM element is visible in the current viewport?
                http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
            */
    function elementInViewport(el) {
        var top = el.offsetTop;
        var left = el.offsetLeft;
        var width = el.offsetWidth;
        var height = el.offsetHeight;

        while (el.offsetParent) {
            el = el.offsetParent;
            top += el.offsetTop;
            left += el.offsetLeft;
        }

        return (
            top < window.pageYOffset + window.innerHeight &&
            left < window.pageXOffset + window.innerWidth &&
            top + height > window.pageYOffset &&
            left + width > window.pageXOffset
        );
    }
})();

// testimonials

// vars
// ("use strict");

window.onload = function () {
    var testim = document.getElementById("testim"),
        testimDots = Array.prototype.slice.call(
            document.getElementById("testim-dots").children
        ),
        testimContent = Array.prototype.slice.call(
            document.getElementById("testim-content").children
        ),
        testimLeftArrow = document.getElementById("left-arrow"),
        testimRightArrow = document.getElementById("right-arrow"),
        testimSpeed = 4500,
        currentSlide = 0,
        currentActive = 0,
        testimTimer,
        touchStartPos,
        touchEndPos,
        touchPosDiff,
        ignoreTouch = 30;

    function playSlide(slide) {
        for (var k = 0; k < testimDots.length; k++) {
            testimContent[k].classList.remove("active");
            testimContent[k].classList.remove("inactive");
            testimDots[k].classList.remove("active");
        }

        if (slide < 0) {
            slide = currentSlide = testimContent.length - 1;
        }

        if (slide > testimContent.length - 1) {
            slide = currentSlide = 0;
        }

        if (currentActive !== currentSlide) {
            testimContent[currentActive].classList.add("inactive");
        }
        testimContent[slide].classList.add("active");
        testimDots[slide].classList.add("active");

        currentActive = currentSlide;

        clearTimeout(testimTimer);
        testimTimer = setTimeout(function () {
            playSlide((currentSlide += 1));
        }, testimSpeed);
    }

    testimLeftArrow.addEventListener("click", function () {
        playSlide((currentSlide -= 1));
    });

    testimRightArrow.addEventListener("click", function () {
        playSlide((currentSlide += 1));
    });

    for (var l = 0; l < testimDots.length; l++) {
        testimDots[l].addEventListener("click", function () {
            playSlide((currentSlide = testimDots.indexOf(this)));
        });
    }

    playSlide(currentSlide);

    // keyboard shortcuts
    document.addEventListener("keyup", function (e) {
        switch (e.keyCode) {
            case 37:
                testimLeftArrow.click();
                break;

            case 39:
                testimRightArrow.click();
                break;

            default:
                break;
        }
    });

    testim.addEventListener("touchstart", function (e) {
        touchStartPos = e.changedTouches[0].clientX;
    });

    testim.addEventListener("touchend", function (e) {
        touchEndPos = e.changedTouches[0].clientX;

        touchPosDiff = touchStartPos - touchEndPos;

        if (touchPosDiff > 0 + ignoreTouch) {
            testimLeftArrow.click();
        } else if (touchPosDiff < 0 - ignoreTouch) {
            testimRightArrow.click();
        }
    });
};

// loader js
// Wait for the page to load
window.addEventListener("load", function () {
    // After 4 seconds, hide the loader and show the content
    setTimeout(function () {
        document.querySelector(".page-loader").style.display = "none";
        document.querySelector(".content").style.display = "block";
    }, 2000); // 4 seconds delay
});
