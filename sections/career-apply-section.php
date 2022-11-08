<head>
    <link rel="stylesheet" href="assets/styles/style-career-apply.css">
</head>

<div class="center-div">
    <div id="questionsdiv" class="questions-container">
        <div class="container initial-active-area">
            <div class="row">
                <div class="col-lg-3 text-center p-0">
                    <div class="side-icons line d-flex flex-column">
                        <!-- <div class="circle-step first-dot"> <img alt="" id="q-emoji-1" src="http://emojione.com/wp-content/uploads/assets/emojis/1f4ac.svg" /></div>
                        <div class="circle-step second-dot"> <img alt="" id="q-emoji-2" src="http://emojione.com/wp-content/uploads/assets/emojis/1f516.svg" /></div>
                        <div class="circle-step third-dot"> <img alt="" id="q-emoji-3" src="http://emojione.com/wp-content/uploads/assets/emojis/2611.svg" /></div> -->
                        <div class="p-4 first-icon active">
                            <span class="fa-stack fa-2x">
                                <i class="fa fa-circle fa-stack-2x text-white"></i>
                                <i class="fa-solid fa-user fa-stack-1x"></i>
                            </span>
                        </div>

                        <div class="p-4 second-icon">
                            <span class="fa-stack fa-2x">
                                <i class="fa fa-circle fa-stack-2x text-white"></i>
                                <i class="fa-solid fa-graduation-cap fa-stack-1x"></i>
                            </span>
                        </div>

                        <div class="p-4 third-icon">
                            <span class="fa-stack fa-2x">
                                <i class="fa fa-circle fa-stack-2x text-white"></i>
                                <i class="fa-solid fa-briefcase fa-stack-1x"></i>
                            </span>
                        </div>
                        <div class="p-4 fourth-icon">
                            <span class="fa-stack fa-2x">
                                <i class="fa fa-circle fa-stack-2x text-white"></i>
                                <i class="fa-solid fa-thumbs-up fa-stack-1x"></i>
                            </span>
                        </div>

                        <!-- <i class="fa-solid fa-user"></i>
                        <i class="fa-solid fa-graduation-cap"></i>
                        <i class="fa-solid fa-briefcase"></i>
                        <i class="fa-solid fa-thumbs-up"></i> -->
                    </div>
                </div>
                <div class="form-bg col-lg-9 pt-3">
                    <div class="steps-wrapper">
                        <div class="question-submission">
                            <form class="submission first-step add-mr-form mb-2">
                                <!-- <label class="input">
                                    <input type="text" class="question" id="questioninput" placeholder="What's your question?">
                                </label> -->
                                <?php
                                include "sections/form-1.php";
                                ?>
                                <button class="first next">Save & Proceed</button>
                            </form>


                            <form class="ml-5 submission second-step">
                                <!-- <label class="input">
                                    <input type="text" class="tags" placeholder="Add some tags!">
                                </label> -->
                                <!-- <p>form 2</p> -->
                                <?php
                                include "sections/form-2.php";
                                ?>
                                <button class="second next">Save & Proceed</button>
                            </form>

                            <form class="submission third-step mt-3 add-mr-form">
                                <!-- <label class="input">
                                    <input type="text" class="tags" placeholder="Add some tags!">
                                </label> -->
                                <!-- <p>form 3</p> -->
                                <?php
                                include "sections/form-3.php";
                                ?>
                                <button class="third next">Save & Proceed</button>
                            </form>

                            <!-- dummy form -->
                            <form class="submission fourth-step mt-3">
                                <!-- <label class="input">
                                    <input type="text" class="tags" placeholder="Add some tags!">
                                </label> -->
                                <!-- <p>form 4</p> -->
                                <?php
                                include "sections/form-4.php";
                                ?>
                                <button class="fourth next">this is dummy</button>
                            </form>

                            <form class="submission fifth-step mt-3">
                                <!-- <label class="input">
                                    <input type="text" class="tags" placeholder="Add some tags!">
                                </label> -->
                                <!-- <p>form 4</p> -->
                                <?php
                                include "sections/form-4.php";
                                ?>
                                <button class="fifth next mt-5">Save & Proceed</button>
                            </form>
                            <!-- <div class="submission third-step">
                                <h5>Your Question: <span class="yourquestion"></span></h5>
                                <h5>Your tags: <span class="yourtags"></span></h5>
                                <button class="third next" onclick="">Submit!</button>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <!-- <div class="attribution">
        <p>Emojis provided free by<a href="http://emojione.com" target="_blank"> http://emojione.com</a></p>
    </div> -->
</div>