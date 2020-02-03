<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Creative Investment</title>

    <!-- Font Awesome Icons -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS - Includes Bootstrap -->
    <link href="css/creative.css" rel="stylesheet">

    <script>
        document.addEventListener("DOMContentLoaded", function(event) {

            function stackedCards() {

                var stackedOptions = 'Top'; //Change stacked cards view from 'Bottom', 'Top' or 'None'.
                var rotate = true; //Activate the elements' rotation for each move on stacked cards.
                var items = 3; //Number of visible elements when the stacked options are bottom or top.
                var elementsMargin = 10; //Define the distance of each element when the stacked options are bottom or top.
                var useOverlays = true; //Enable or disable the overlays for swipe elements.
                var maxElements; //Total of stacked cards on DOM.
                var currentPosition = 0; //Keep the position of active stacked card.
                var velocity = 0.3; //Minimum velocity allowed to trigger a swipe.
                var topObj; //Keep the swipe top properties.
                var rightObj; //Keep the swipe right properties.
                var leftObj; //Keep the swipe left properties.
                var listElNodesObj; //Keep the list of nodes from stacked cards.
                var listElNodesWidth; //Keep the stacked cards width.
                var currentElementObj; //Keep the stacked card element to swipe.
                var stackedCardsObj;
                var isFirstTime = true;
                var elementHeight;
                var obj;
                var elTrans;

                obj = document.getElementById('stacked-cards-block');
                stackedCardsObj = obj.querySelector('.stackedcards-container');
                listElNodesObj = stackedCardsObj.children;

                topObj = obj.querySelector('.stackedcards-overlay.top');
                rightObj = obj.querySelector('.stackedcards-overlay.right');
                leftObj = obj.querySelector('.stackedcards-overlay.left');

                countElements();
                currentElement();
                listElNodesWidth = stackedCardsObj.offsetWidth;
                currentElementObj = listElNodesObj[0];
                updateUi();

                //Prepare elements on DOM
                addMargin = elementsMargin * (items - 1) + 'px';

                if (stackedOptions === "Top") {

                    for (i = items; i < maxElements; i++) {
                        listElNodesObj[i].classList.add('stackedcards-top', 'stackedcards--animatable', 'stackedcards-origin-top');
                    }

                    elTrans = elementsMargin * (items - 1);

                    stackedCardsObj.style.marginBottom = addMargin;

                } else if (stackedOptions === "Bottom") {


                    for (i = items; i < maxElements; i++) {
                        listElNodesObj[i].classList.add('stackedcards-bottom', 'stackedcards--animatable', 'stackedcards-origin-bottom');
                    }

                    elTrans = 0;

                    stackedCardsObj.style.marginBottom = addMargin;

                } else if (stackedOptions === "None") {

                    for (i = items; i < maxElements; i++) {
                        listElNodesObj[i].classList.add('stackedcards-none', 'stackedcards--animatable');
                    }

                    elTrans = 0;

                }

                for (i = items; i < maxElements; i++) {
                    listElNodesObj[i].style.zIndex = 0;
                    listElNodesObj[i].style.opacity = 0;
                    listElNodesObj[i].style.webkitTransform = 'scale(' + (1 - (items * 0.04)) + ') translateX(0) translateY(' + elTrans + 'px) translateZ(0)';
                    listElNodesObj[i].style.transform = 'scale(' + (1 - (items * 0.04)) + ') translateX(0) translateY(' + elTrans + 'px) translateZ(0)';
                }

                if (listElNodesObj[currentPosition]) {
                    listElNodesObj[currentPosition].classList.add('stackedcards-active');
                }

                if (useOverlays) {
                    leftObj.style.transform = 'translateX(0px) translateY(' + elTrans + 'px) translateZ(0px) rotate(0deg)';
                    leftObj.style.webkitTransform = 'translateX(0px) translateY(' + elTrans + 'px) translateZ(0px) rotate(0deg)';

                    rightObj.style.transform = 'translateX(0px) translateY(' + elTrans + 'px) translateZ(0px) rotate(0deg)';
                    rightObj.style.webkitTransform = 'translateX(0px) translateY(' + elTrans + 'px) translateZ(0px) rotate(0deg)';

                    topObj.style.transform = 'translateX(0px) translateY(' + elTrans + 'px) translateZ(0px) rotate(0deg)';
                    topObj.style.webkitTransform = 'translateX(0px) translateY(' + elTrans + 'px) translateZ(0px) rotate(0deg)';

                } else {
                    leftObj.className = '';
                    rightObj.className = '';
                    topObj.className = '';

                    leftObj.classList.add('stackedcards-overlay-hidden');
                    rightObj.classList.add('stackedcards-overlay-hidden');
                    topObj.classList.add('stackedcards-overlay-hidden');
                }

                //Remove class init
                setTimeout(function() {
                    obj.classList.remove('init');
                }, 150);


                function backToMiddle() {

                    removeNoTransition();
                    transformUi(0, 0, 1, currentElementObj);

                    if (useOverlays) {
                        transformUi(0, 0, 0, leftObj);
                        transformUi(0, 0, 0, rightObj);
                        transformUi(0, 0, 0, topObj);
                    }

                    setZindex(5);

                    if (!(currentPosition >= maxElements)) {
                        //roll back the opacity of second element
                        if ((currentPosition + 1) < maxElements) {
                            listElNodesObj[currentPosition + 1].style.opacity = '.8';
                        }
                    }
                };

                // Usable functions
                function countElements() {
                    maxElements = listElNodesObj.length;
                    if (items > maxElements) {
                        items = maxElements;
                    }
                };

                //Keep the active card.
                function currentElement() {
                    currentElementObj = listElNodesObj[currentPosition];
                };

                //Functions to swipe left elements on logic external action.
                function onActionLeft() {
                    if (!(currentPosition >= maxElements)) {
                        if (useOverlays) {
                            leftObj.classList.remove('no-transition');
                            topObj.classList.remove('no-transition');
                            leftObj.style.zIndex = '8';
                            transformUi(0, 0, 1, leftObj);

                        }

                        setTimeout(function() {
                            onSwipeLeft();
                            resetOverlayLeft();
                        }, 300);
                    }
                };

                //Functions to swipe right elements on logic external action.
                function onActionRight() {
                    if (!(currentPosition >= maxElements)) {
                        if (useOverlays) {
                            rightObj.classList.remove('no-transition');
                            topObj.classList.remove('no-transition');
                            rightObj.style.zIndex = '8';
                            transformUi(0, 0, 1, rightObj);
                        }

                        setTimeout(function() {
                            onSwipeRight();
                            resetOverlayRight();
                        }, 300);
                    }
                };

                //Functions to swipe top elements on logic external action.
                function onActionTop() {
                    if (!(currentPosition >= maxElements)) {
                        if (useOverlays) {
                            leftObj.classList.remove('no-transition');
                            rightObj.classList.remove('no-transition');
                            topObj.classList.remove('no-transition');
                            topObj.style.zIndex = '8';
                            transformUi(0, 0, 1, topObj);
                        }

                        setTimeout(function() {
                            onSwipeTop();
                            resetOverlays();
                        }, 300); //wait animations end
                    }
                };

                //Swipe active card to left.
                function onSwipeLeft() {
                    removeNoTransition();
                    transformUi(-1000, 0, 0, currentElementObj);
                    if (useOverlays) {
                        transformUi(-1000, 0, 0, leftObj); //Move leftOverlay
                        transformUi(-1000, 0, 0, topObj); //Move topOverlay
                        resetOverlayLeft();
                    }
                    currentPosition = currentPosition + 1;
                    updateUi();
                    currentElement();
                    setActiveHidden();
                };

                //Swipe active card to right.
                function onSwipeRight() {
                    removeNoTransition();
                    transformUi(1000, 0, 0, currentElementObj);
                    if (useOverlays) {
                        transformUi(1000, 0, 0, rightObj); //Move rightOverlay
                        transformUi(1000, 0, 0, topObj); //Move topOverlay
                        resetOverlayRight();
                    }

                    currentPosition = currentPosition + 1;
                    updateUi();
                    currentElement();
                    setActiveHidden();
                };

                //Swipe active card to top.
                function onSwipeTop() {
                    removeNoTransition();
                    transformUi(0, -1000, 0, currentElementObj);
                    if (useOverlays) {
                        transformUi(0, -1000, 0, leftObj); //Move leftOverlay
                        transformUi(0, -1000, 0, rightObj); //Move rightOverlay
                        transformUi(0, -1000, 0, topObj); //Move topOverlay
                        resetOverlays();
                    }

                    currentPosition = currentPosition + 1;
                    updateUi();
                    currentElement();
                    setActiveHidden();
                };

                //Remove transitions from all elements to be moved in each swipe movement to improve perfomance of stacked cards.
                function removeNoTransition() {
                    if (listElNodesObj[currentPosition]) {

                        if (useOverlays) {
                            leftObj.classList.remove('no-transition');
                            rightObj.classList.remove('no-transition');
                            topObj.classList.remove('no-transition');
                        }

                        listElNodesObj[currentPosition].classList.remove('no-transition');
                        listElNodesObj[currentPosition].style.zIndex = 6;
                    }

                };

                //Move the overlay left to initial position.
                function resetOverlayLeft() {
                    if (!(currentPosition >= maxElements)) {
                        if (useOverlays) {
                            setTimeout(function() {

                                if (stackedOptions === "Top") {

                                    elTrans = elementsMargin * (items - 1);

                                } else if (stackedOptions === "Bottom" || stackedOptions === "None") {

                                    elTrans = 0;

                                }

                                if (!isFirstTime) {

                                    leftObj.classList.add('no-transition');
                                    topObj.classList.add('no-transition');

                                }

                                requestAnimationFrame(function() {

                                    leftObj.style.transform = "translateX(0) translateY(" + elTrans + "px) translateZ(0)";
                                    leftObj.style.webkitTransform = "translateX(0) translateY(" + elTrans + "px) translateZ(0)";
                                    leftObj.style.opacity = '0';

                                    topObj.style.transform = "translateX(0) translateY(" + elTrans + "px) translateZ(0)";
                                    topObj.style.webkitTransform = "translateX(0) translateY(" + elTrans + "px) translateZ(0)";
                                    topObj.style.opacity = '0';

                                });

                            }, 300);

                            isFirstTime = false;
                        }
                    }
                };

                //Move the overlay right to initial position.
                function resetOverlayRight() {
                    if (!(currentPosition >= maxElements)) {
                        if (useOverlays) {
                            setTimeout(function() {

                                if (stackedOptions === "Top") {
                                    +2

                                    elTrans = elementsMargin * (items - 1);

                                } else if (stackedOptions === "Bottom" || stackedOptions === "None") {

                                    elTrans = 0;

                                }

                                if (!isFirstTime) {

                                    rightObj.classList.add('no-transition');
                                    topObj.classList.add('no-transition');

                                }

                                requestAnimationFrame(function() {

                                    rightObj.style.transform = "translateX(0) translateY(" + elTrans + "px) translateZ(0)";
                                    rightObj.style.webkitTransform = "translateX(0) translateY(" + elTrans + "px) translateZ(0)";
                                    rightObj.style.opacity = '0';

                                    topObj.style.transform = "translateX(0) translateY(" + elTrans + "px) translateZ(0)";
                                    topObj.style.webkitTransform = "translateX(0) translateY(" + elTrans + "px) translateZ(0)";
                                    topObj.style.opacity = '0';

                                });

                            }, 300);

                            isFirstTime = false;
                        }
                    }
                };

                //Move the overlays to initial position.
                function resetOverlays() {
                    if (!(currentPosition >= maxElements)) {
                        if (useOverlays) {

                            setTimeout(function() {
                                if (stackedOptions === "Top") {

                                    elTrans = elementsMargin * (items - 1);

                                } else if (stackedOptions === "Bottom" || stackedOptions === "None") {

                                    elTrans = 0;

                                }

                                if (!isFirstTime) {

                                    leftObj.classList.add('no-transition');
                                    rightObj.classList.add('no-transition');
                                    topObj.classList.add('no-transition');

                                }

                                requestAnimationFrame(function() {

                                    leftObj.style.transform = "translateX(0) translateY(" + elTrans + "px) translateZ(0)";
                                    leftObj.style.webkitTransform = "translateX(0) translateY(" + elTrans + "px) translateZ(0)";
                                    leftObj.style.opacity = '0';

                                    rightObj.style.transform = "translateX(0) translateY(" + elTrans + "px) translateZ(0)";
                                    rightObj.style.webkitTransform = "translateX(0) translateY(" + elTrans + "px) translateZ(0)";
                                    rightObj.style.opacity = '0';

                                    topObj.style.transform = "translateX(0) translateY(" + elTrans + "px) translateZ(0)";
                                    topObj.style.webkitTransform = "translateX(0) translateY(" + elTrans + "px) translateZ(0)";
                                    topObj.style.opacity = '0';

                                });

                            }, 300); // wait for animations time

                            isFirstTime = false;
                        }
                    }
                };

                function setActiveHidden() {
                    if (!(currentPosition >= maxElements)) {
                        listElNodesObj[currentPosition - 1].classList.remove('stackedcards-active');
                        listElNodesObj[currentPosition - 1].classList.add('stackedcards-hidden');
                        listElNodesObj[currentPosition].classList.add('stackedcards-active');
                    }
                };

                //Set the new z-index for specific card.
                function setZindex(zIndex) {
                    if (listElNodesObj[currentPosition]) {
                        listElNodesObj[currentPosition].style.zIndex = zIndex;
                    }
                };

                // Remove element from the DOM after swipe. To use this method you need to call this function in onSwipeLeft, onSwipeRight and onSwipeTop and put the method just above the variable 'currentPosition = currentPosition + 1'. 
                //On the actions onSwipeLeft, onSwipeRight and onSwipeTop you need to remove the currentPosition variable (currentPosition = currentPosition + 1) and the function setActiveHidden

                function removeElement() {
                    currentElementObj.remove();
                    if (!(currentPosition >= maxElements)) {
                        listElNodesObj[currentPosition].classList.add('stackedcards-active');
                    }
                };

                //Add translate X and Y to active card for each frame.
                function transformUi(moveX, moveY, opacity, elementObj) {
                    requestAnimationFrame(function() {
                        var element = elementObj;

                        // Function to generate rotate value 
                        function RotateRegulator(value) {
                            if (value / 10 > 15) {
                                return 15;
                            } else if (value / 10 < -15) {
                                return -15;
                            }
                            return value / 10;
                        }

                        if (rotate) {
                            rotateElement = RotateRegulator(moveX);
                        } else {
                            rotateElement = 0;
                        }

                        if (stackedOptions === "Top") {
                            elTrans = elementsMargin * (items - 1);
                            if (element) {
                                element.style.webkitTransform = "translateX(" + moveX + "px) translateY(" + (moveY + elTrans) + "px) translateZ(0) rotate(" + rotateElement + "deg)";
                                element.style.transform = "translateX(" + moveX + "px) translateY(" + (moveY + elTrans) + "px) translateZ(0) rotate(" + rotateElement + "deg)";
                                element.style.opacity = opacity;
                            }
                        } else if (stackedOptions === "Bottom" || stackedOptions === "None") {

                            if (element) {
                                element.style.webkitTransform = "translateX(" + moveX + "px) translateY(" + (moveY) + "px) translateZ(0) rotate(" + rotateElement + "deg)";
                                element.style.transform = "translateX(" + moveX + "px) translateY(" + (moveY) + "px) translateZ(0) rotate(" + rotateElement + "deg)";
                                element.style.opacity = opacity;
                            }

                        }
                    });
                };

                //Action to update all elements on the DOM for each stacked card.
                function updateUi() {
                    requestAnimationFrame(function() {
                        elTrans = 0;
                        var elZindex = 5;
                        var elScale = 1;
                        var elOpac = 1;
                        var elTransTop = items;
                        var elTransInc = elementsMargin;

                        for (i = currentPosition; i < (currentPosition + items); i++) {
                            if (listElNodesObj[i]) {
                                if (stackedOptions === "Top") {

                                    listElNodesObj[i].classList.add('stackedcards-top', 'stackedcards--animatable', 'stackedcards-origin-top');

                                    if (useOverlays) {
                                        leftObj.classList.add('stackedcards-origin-top');
                                        rightObj.classList.add('stackedcards-origin-top');
                                        topObj.classList.add('stackedcards-origin-top');
                                    }

                                    elTrans = elTransInc * elTransTop;
                                    elTransTop--;

                                } else if (stackedOptions === "Bottom") {
                                    listElNodesObj[i].classList.add('stackedcards-bottom', 'stackedcards--animatable', 'stackedcards-origin-bottom');

                                    if (useOverlays) {
                                        leftObj.classList.add('stackedcards-origin-bottom');
                                        rightObj.classList.add('stackedcards-origin-bottom');
                                        topObj.classList.add('stackedcards-origin-bottom');
                                    }

                                    elTrans = elTrans + elTransInc;

                                } else if (stackedOptions === "None") {

                                    listElNodesObj[i].classList.add('stackedcards-none', 'stackedcards--animatable');
                                    elTrans = elTrans + elTransInc;

                                }

                                listElNodesObj[i].style.transform = 'scale(' + elScale + ') translateX(0) translateY(' + (elTrans - elTransInc) + 'px) translateZ(0)';
                                listElNodesObj[i].style.webkitTransform = 'scale(' + elScale + ') translateX(0) translateY(' + (elTrans - elTransInc) + 'px) translateZ(0)';
                                listElNodesObj[i].style.opacity = elOpac;
                                listElNodesObj[i].style.zIndex = elZindex;

                                elScale = elScale - 0.04;
                                elOpac = elOpac - (1 / items);
                                elZindex--;
                            }
                        }

                    });

                };

                //Touch events block
                var element = obj;
                var startTime;
                var startX;
                var startY;
                var translateX;
                var translateY;
                var currentX;
                var currentY;
                var touchingElement = false;
                var timeTaken;
                var topOpacity;
                var rightOpacity;
                var leftOpacity;

                function setOverlayOpacity() {

                    topOpacity = (((translateY + (elementHeight) / 2) / 100) * -1);
                    rightOpacity = translateX / 100;
                    leftOpacity = ((translateX / 100) * -1);


                    if (topOpacity > 1) {
                        topOpacity = 1;
                    }

                    if (rightOpacity > 1) {
                        rightOpacity = 1;
                    }

                    if (leftOpacity > 1) {
                        leftOpacity = 1;
                    }
                }

                function gestureStart(evt) {
                    startTime = new Date().getTime();

                    startX = evt.changedTouches[0].clientX;
                    startY = evt.changedTouches[0].clientY;

                    currentX = startX;
                    currentY = startY;

                    setOverlayOpacity();

                    touchingElement = true;
                    if (!(currentPosition >= maxElements)) {
                        if (listElNodesObj[currentPosition]) {
                            listElNodesObj[currentPosition].classList.add('no-transition');
                            setZindex(6);

                            if (useOverlays) {
                                leftObj.classList.add('no-transition');
                                rightObj.classList.add('no-transition');
                                topObj.classList.add('no-transition');
                            }

                            if ((currentPosition + 1) < maxElements) {
                                listElNodesObj[currentPosition + 1].style.opacity = '1';
                            }

                            elementHeight = listElNodesObj[currentPosition].offsetHeight / 3;
                        }

                    }

                };

                function gestureMove(evt) {
                    currentX = evt.changedTouches[0].pageX;
                    currentY = evt.changedTouches[0].pageY;

                    translateX = currentX - startX;
                    translateY = currentY - startY;

                    setOverlayOpacity();

                    if (!(currentPosition >= maxElements)) {
                        evt.preventDefault();
                        transformUi(translateX, translateY, 1, currentElementObj);

                        if (useOverlays) {
                            transformUi(translateX, translateY, topOpacity, topObj);

                            if (translateX < 0) {
                                transformUi(translateX, translateY, leftOpacity, leftObj);
                                transformUi(0, 0, 0, rightObj);

                            } else if (translateX > 0) {
                                transformUi(translateX, translateY, rightOpacity, rightObj);
                                transformUi(0, 0, 0, leftObj);
                            }

                            if (useOverlays) {
                                leftObj.style.zIndex = 8;
                                rightObj.style.zIndex = 8;
                                topObj.style.zIndex = 7;
                            }

                        }

                    }

                };

                function gestureEnd(evt) {

                    if (!touchingElement) {
                        return;
                    }

                    translateX = currentX - startX;
                    translateY = currentY - startY;

                    timeTaken = new Date().getTime() - startTime;

                    touchingElement = false;

                    if (!(currentPosition >= maxElements)) {
                        if (translateY < (elementHeight * -1) && translateX > ((listElNodesWidth / 2) * -1) && translateX < (listElNodesWidth / 2)) { //is Top?

                            if (translateY < (elementHeight * -1) || (Math.abs(translateY) / timeTaken > velocity)) { // Did It Move To Top?
                                onSwipeTop();
                            } else {
                                backToMiddle();
                            }

                        } else {

                            if (translateX < 0) {
                                if (translateX < ((listElNodesWidth / 2) * -1) || (Math.abs(translateX) / timeTaken > velocity)) { // Did It Move To Left?
                                    onSwipeLeft();
                                } else {
                                    backToMiddle();
                                }
                            } else if (translateX > 0) {

                                if (translateX > (listElNodesWidth / 2) && (Math.abs(translateX) / timeTaken > velocity)) { // Did It Move To Right?
                                    onSwipeRight();
                                } else {
                                    backToMiddle();
                                }

                            }
                        }
                    }
                };

                element.addEventListener('touchstart', gestureStart, false);
                element.addEventListener('touchmove', gestureMove, false);
                element.addEventListener('touchend', gestureEnd, false);

                //Add listeners to call global action for swipe cards
                var buttonLeft = document.querySelector('.left-action');
                var buttonTop = document.querySelector('.top-action');
                var buttonRight = document.querySelector('.right-action');

                buttonLeft.addEventListener('click', onActionLeft, false);
                buttonTop.addEventListener('click', onActionTop, false);
                buttonRight.addEventListener('click', onActionRight, false);

            }

            stackedCards();

        });
    </script>
    <style>
        .no-transition {
            -webkit-transition: none ! important;
            -o-transition: none ! important;
            transition: none ! important;
        }

        .stackedcards-overflow {
            overflow-y: hidden !important;
        }

        .stackedcards.init {
            opacity: 0;
            /* set the opacity to 0 if you want a fade-in effect to stacked cards on page load */
        }

        .stackedcards {
            position: relative;
        }

        .stackedcards * {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            left: -120px;
        }

        .stackedcards--animatable {
            -webkit-transition: all 400ms ease;
            -o-transition: all 400ms ease;
            transition: all 400ms ease;
        }

        .stackedcards .stackedcards-container>*,
        .stackedcards-overlay {
            position: absolute;
            width: 1000px;
            /* set 100% */
            height: 600px;
            left: -120px;

            /* set 100% */
            will-change: transform, opacity;
            top: 0;
            border-radius: 10px;
        }

        .stackedcards-overlay.left>div,
        .stackedcards-overlay.right>div,
        .stackedcards-overlay.top>div {
            width: 100%;
            height: 100%;
            left: -120px;

            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .stackedcards-overlay.left,
        .stackedcards-overlay.right,
        .stackedcards-overlay.top {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            left: -120px;
            opacity: 0;
            top: 0;
            height: 100%;
            font-size: 24px;
            /* this style was added only for better preview */
            text-transform: uppercase;
            /* this style was added only for better preview */
            font-weight: 500;
            /* this style was added only for better preview */
            color: #fff;
            /* this style was added only for better preview */
        }

        .stackedcards-overlay.top {
            background: #E38568;
        }

        .stackedcards-overlay.right {
            background: #7BB3C5;
        }

        .stackedcards-overlay.left {
            background: #E58D93;
        }

        .stackedcards-overlay.left:empty,
        .stackedcards-overlay.right:empty,
        .stackedcards-overlay.top:empty {
            display: none !important;
        }

        .stackedcards-overlay-hidden {
            display: none;
        }

        .stackedcards-origin-bottom {
            -webkit-transform-origin: bottom;
            -ms-transform-origin: bottom;
            transform-origin: bottom;
        }

        .stackedcards-origin-top {
            -webkit-transform-origin: top;
            -ms-transform-origin: top;
            transform-origin: top;
        }

        .stackedcards-bottom,
        .stackedcards-top,
        .stackedcards-none {
            background: #fff;
            /* set card background background */
            height: 100%;
        }

        .stackedcards .stackedcards-container> :nth-child(1) {
            position: relative;
            display: block;
        }

        /* global actions buttons*/
        .global-actions {
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            width: 100%;
            margin-top: 10px;
        }

        .top-action,
        .right-action,
        .left-action {
            width: 100%;
            height: 50px;
            border-radius: 10px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            text-transform: uppercase;
            font-weight: 500;
            color: #fff;
        }

        .top-action {
            background: #E38568;
            margin: 0 10px;
        }

        .right-action {
            background: #7BB3C5;
        }

        .left-action {
            background: #E58D93;
        }

        /* elements on stacked cards */
        .card-item {
            background: #FFFFFF;
        }

        .searchable-container {
            margin: 20px 0 0 0
        }

        .searchable-container label.btn-default.active {
            background-color: #007ba7;
            color: #FFF
        }

        .searchable-container label.btn-default {
            width: 90%;
            border: 1px solid #efefef;
            margin: 5px;
            box-shadow: 5px 8px 8px 0 #ccc;
        }

        .searchable-container label .bizcontent {
            width: 100%;
        }

        .searchable-container .btn-group {
            width: 90%
        }

        .searchable-container .btn span.glyphicon {
            opacity: 0;
        }

        .searchable-container .btn.active span.glyphicon {
            opacity: 1;
        }

        .col-lg-3 {
            max-width: 100% !important;
        }

        .btn-default {
            background-color: white;
        }

        .stepwizard-step p {
            margin-top: 10px;
        }

        .stepwizard-row {
            display: table-row;
        }

        .stepwizard {
            display: table;
            width: 100%;
            position: relative;
        }

        .stepwizard-step button[disabled] {
            opacity: 1 !important;
            filter: alpha(opacity=100) !important;
        }

        .stepwizard-row:before {
            top: 14px;
            bottom: 0;
            position: absolute;
            content: " ";
            width: 100%;
            height: 1px;
            background-color: #ccc;
            z-order: 0;

        }

        .stepwizard-step {
            display: table-cell;
            text-align: center;
            position: relative;
        }

        .btn-circle {
            width: 30px;
            height: 30px;
            text-align: center;
            padding: 6px 0;
            font-size: 12px;
            line-height: 1.428571429;
            border-radius: 15px;
        }
    </style>
</head>

<body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Creative Investment</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <a class="nav-item nav-link navbar-brand active js-scroll-trigger" href="index.php">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link navbar-brand js-scroll-trigger" href="features.php">Features</a>
                    <a class="nav-item nav-link navbar-brand js-scroll-trigger" href="pricing.php">Pricing</a>
                </ul>
            </div>
        </div>
    </nav>


    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end">
                    <h2 class="text-uppercase text-white font-weight-bold">Matching Entrepreneurs in your area</h2>
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <div class="container">
                        <div class="stepwizard">
                            <div class="stepwizard-row setup-panel">
                                <div class="stepwizard-step">
                                    <a href="#step-1" type="button" class="btn btn-default btn-circle" disabled="disabled">1</a>
                                    <p style="color: white;">Step 1</p>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                                    <p style="color: white;">Step 2</p>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-3" type="button" class="btn btn-primary btn-circle" disabled="disabled">3</a>
                                    <p style="color: white;">Step 3</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="stacked-cards-block" class="stackedcards stackedcards--animatable init">
                        <div class="stackedcards-container">
                            <div class="card-item">

                                <div class="img">
                                    <img src="https://image.ibb.co/f5Kehq/bio-image.jpg" alt="image" />
                                    <br>
                                    <img src="https://image.ibb.co/cbCMvA/logo.png" />
                                </div>
                                <h2>Christina L<br><span>Web Developer</span></h2>
                                <p> Hi there, I'm Christina
                                    I would like to start an e-commerce Company of home utilities.</p>
                                <p>Budget Needed: &euro;10,000</p>
                            </div>


                            <div class="card-item">
                                <div class="img">
                                    <img src="https://randomuser.me/api/portraits/men/90.jpg" alt="image" />
                                    <br>
                                    <img src="https://image.ibb.co/cbCMvA/logo.png" />
                                </div>
                                <h2>Xing Li<br><span>Web Designer</span></h2>
                                <p> Hi there, I'm Xing
                                    I would liek to design churches and
                                    places of spirituality Websites and i would need to start my own startup .</p>
                                <p>Budget Needed: &euro;8,000</p>
                            </div>
                            <div class="card-item">
                                <div class="img">
                                    <img src="https://randomuser.me/api/portraits/men/81.jpg" alt="image" />
                                    <br>
                                    <img src="https://image.ibb.co/cbCMvA/logo.png" />
                                </div>
                                <h2>Joseph S<br><span>Photographer</span></h2>
                                <p> Hi there, I'm Joseph
                                    I want to open a Photoshoot shop and I need a partner.</p>
                                <p>Budget Needed: &euro;30,000</p>
                            </div>
                            <div class="card-item">
                                <div class="img">
                                    <img src="https://randomuser.me/api/portraits/men/63.jpg" alt="image" />
                                    <br>
                                    <img src="https://image.ibb.co/cbCMvA/logo.png" />
                                </div>
                                <h2>Thomas R<br><span>Office worker</span></h2>
                                <p> Hi there, I'm Thomas
                                    I would like to open a transaltion office for VISA procedures.</p>
                                <p>Budget Needed: &euro;20,000</p>
                            </div>
                            <div class="card-item">
                                <div class="img">
                                    <img src="https://randomuser.me/api/portraits/men/79.jpg" alt="image" />
                                    <br>
                                    <img src="https://image.ibb.co/cbCMvA/logo.png" />
                                </div>
                                <h2>Matthew K<br><span>Data Analyst</span></h2>
                                <p> Hi there, I'm Matthew
                                    There is a need to secure Data and I would like to open a company to save data in servers in a very secure way.</p>
                                <p>Budget Needed: &euro;35,000</p>
                            </div>
                            <div class="card-item">
                                <div class="img">
                                    <img src="https://randomuser.me/api/portraits/men/7.jpg" alt="image" />
                                    <br>
                                    <img src="https://image.ibb.co/cbCMvA/logo.png" />
                                </div>
                                <h2>Chris J<br><span>Engineer</span></h2>
                                <p> Hi there, I'm Chris
                                    I have a markup of revolutionary recyclable toilet water and I would like to make it happen.</p>
                                <p>Budget Needed: &euro;15,000</p>
                            </div>
                            <div class="card-item">
                                <div class="img">
                                    <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="image" />
                                    <br>
                                    <img src="https://image.ibb.co/cbCMvA/logo.png" />
                                </div>
                                <h2>Ashley M<br><span>Software Developer</span></h2>
                                <p> Hi there, I'm Ashley
                                    I would like to open my own Mobile gaming platform as I have Ideas and a start already.</p>
                                <p>Budget Needed: &euro;30,000</p>
                            </div>
                        </div>
                        <div class="stackedcards--animatable stackedcards-overlay top">TOP</div>
                        <div class="stackedcards--animatable stackedcards-overlay right">RIGHT</div>
                        <div class="stackedcards--animatable stackedcards-overlay left">LEFT</div>
                    </div>
                    <div class="global-actions">
                        <div class="left-action">not interested</div>
                        <div class="top-action">amazing</div>
                        <div class="right-action">Interested</div>
                    </div>

    </header>
</body>

<footer>
    <p>
        <center> Creative Investment Copyright &copy; All rights reserved. <?= date("Y") ?></center>
    </p>
</footer>
<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>

</html>