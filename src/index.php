<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>HackSandbox Editor</title>
        <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
        <link href="less/main.less?v=0004" type="text/less" rel="stylesheet" />
        <link href="https://ssl.jackzh.com/file/css/font-awesome-4.4.0/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/processing.min.js"></script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <script src="https://ssl.jackzh.com/file/js/ace/ace-builds-1.2.2/src-min/ace.js"></script>
        <script src="https://ssl.jackzh.com/file/js/less-js/less.min.js"></script>
        <script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>
        <script src="js/editor.js?v=0003" type="text/babel"></script>
    </head>
    <body>
        <div id="info-drop-down">
            <input type="text" id="sketch-title-textbox" value="untitled hack" />
        </div>

        <div id="app-container">
            <div id="control-bar">
                <div class="left-label">STANDBY</div>
                <ul>
                    <li id="gallery-button"><i class="fa fa-home" aria-hidden="true"></i> GALLERY</li>
                    <li id="compile-button" data-toggle="tooltip" data-placement="bottom" title="Compile / Run"><span class="glyphicon glyphicon-play-circle"></span> RUN &amp; SAVE</li>
                    <li id="stop-button" class="disable" data-toggle="tooltip" data-placement="bottom" title="Stop"><span class="glyphicon glyphicon-stop"></span> STOP</li>
                    <!--<li data-toggle="tooltip" id="save-button" data-placement="bottom" title="Save"><i class="fa fa-floppy-o" aria-hidden="true"></i> SAVE</li>-->
                    <li data-toggle="tooltip" id="fork-button" data-placement="bottom" title="Fork / Clone to Your Account"><i class="fa fa-code-fork" aria-hidden="true"></i> FORK</li>
                    <li id="expand-button"><i class="fa fa-angle-down" aria-hidden="true"></i> TITLE</li>
                    <li id="compress-button" style="display:none;"><i class="fa fa-angle-up" aria-hidden="true"></i> TITLE</li>
                    |
                    <li id="new-button"><i class="fa fa-file-code-o" aria-hidden="true"></i> NEW</li>
                </ul>
                <div class="right-label">idhere</div>
            </div>
            <div class="left-container">
                <div class="editor-tabs-container">
                    <ul>
                    </ul>
                    <div id="add-tab-button"><i class="fa fa-plus" aria-hidden="true"></i></div>
                </div>
                <div id="code-editor"></div>
                <pre id="console-container"></pre>
            </div>
            <div class="right-container">
                <br><br>
                <canvas id="render-canvas"></canvas>
                <br><br>
                <button id="hack-your-own-copy"><i class="fa fa-code-fork" aria-hidden="true"></i> Hack Your Own Copy</button>
                <div id="tutorial-popup"> 
                    <div id="close-tut">[x]</div> 
                    <div id="tut-content-container"></div> 
                    <div id="tut-control-container"> 
                        <div class="left" id="prev-tut-button">Previous</div> 
                        <div class="right" id="next-tut-button">Next</div> 
                    </div> 
                </div> 
            </div>
            <!--Image upload and management panel-->
            <div class="uploaded-image-container">
                <form class="box" method="post" action="" enctype="multipart/form-data">
                    <div class="box__input">
                        <input class="box__file" type="file" name="file" id="file" />
                        <label for="file"><span class="box__dragndrop">Drop a File Here</span></label>
                    </div>
                    <button class="box__button" type="submit">Choose a File</button>
                    <div class="box__uploading">Uploading&hellip;</div>
                    <div class="box__success">Done!</div>
                    <div class="box__error">Error! <span></span>.</div>
                </form>
            </div>
            <div id="global-shade"></div>
            <div id="runtime-exception-window" class="alert-window not_visible panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">Oops, seems like something is not right...</h3>
                </div>
                <div class="panel-body">
                    Error message here.
                </div>
            </div>
            <div id="full-screen-loading"><i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i> Initializing Hacks ...</div>
        </div>
        <div id="home-splash">

            <h1>Learn | Play | Hack</h1>
            <br><br>
            <a href="#base"><button id="create-your-own"><span class="glyphicon glyphicon-plus"></span> Create Your Own</button></a>
            <br><br>
            <div id="goto-editor-button">hacker.goToEditor();</div>
            <div class="showcase-row container">
                
            </div>
        </div>
    </body>
</html>
<script type="text/javascript">

    var lineCount = 0;
    window.print = function(message){
        $("#console-container").html($("#console-container").html() + "> [" + lineCount + "]" + message + "\n");
        lineCount++;
        consoleText = $("#console-container").html();
        if(consoleText.length > 1000){
            $("#console-container").html(consoleText.substr(consoleText.length - 1000, 1000));
        }
        $("#console-container").scrollTop($("#console-container")[0].scrollHeight);
    };

    print("processing.js online editor v1.0");
    
</script>
