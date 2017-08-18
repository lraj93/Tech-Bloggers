<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>TechBlogger's-Blog</title>
  <meta name="description" content="Description of your site goes here">
  <meta name="keywords" content="keyword1, keyword2, keyword3">
  <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="main">
        <div class="page">
            <div class="header">
                <div class="banner">
                    <h1>Tech Blogger's</h1>
                </div>
                <div class="topmenu">
                    <ul>
                      <li style="border-left: medium none;"><a href="home.html">Home</a></li>
                      <li><a href="aboutus.html">About Us</a></li>
                      <li><a href="signup.html">Sign Up</a></li>
                      <li><a href="login.html">Login</a></li>
                  </ul>
              </div>
          </div>
          <div class="content">
            <div class="content-in">
                <div class="left-panel">
                    <h2>Categories</h2>
                    <div class="left-content">
                        <ul>
                           <?php
                           include 'left_content.php';
                           ?>
                       </ul>
                   </div>
                   <div class="gap"></div>
                   <h2>Recent Updates</h2>
                   <div class="left-content">
                    <ol>
                        <?php
                        include 'left_recent.php';
                        ?>
                    </ol>
                </div>
            </div>
            <div class="right-panel">
                <div class="right-panel-in">
                    <div class="row">
                        <h2 class="title"><span>Welcome to <span>Tech Blogger's</span></span></h2>
                        <div class="row2">
                            <div id="example">
                                <p>
                                    Type some text (if you like):<br>
                                    <input type="text" name="textline" size="30">
                                </p>
                                <p>
                                    Please specify a file, or a set of files:<br>
                                    <div class="demo-section k-content">
                                        <input type="file" name="files" id="files" />
                                    </div>

                                    <script id="fileTemplate" type="text/x-kendo-template">
                                    <span class='k-progress'></span>
                                    <div class='file-wrapper'>
                                    <span class='file-icon #=addExtensionClass(files[0].extension)#'></span>
                                    <h4 class='file-heading file-name-heading'>Name: #=name#</h4>
                                    <h4 class='file-heading file-size-heading'>Size: #=size# bytes</h4>
                                    <button type='button' class='k-upload-action'></button>
                                    </div>
                                    </script>

                                    <script>
                                    $(document).ready(function () {
                                        $("#files").kendoUpload({
                                            multiple: true,
                                            async: {
                                                saveUrl: "save",
                                                removeUrl: "remove",
                                                autoUpload: false
                                            },
                                            template: kendo.template($('#fileTemplate').html())
                                        });
                                    });

                                    function addExtensionClass(extension) {
                                        switch (extension) {
                                            case '.jpg':
                                            case '.img':
                                            case '.png':
                                            case '.gif':
                                            return "img-file";
                                            case '.doc':
                                            case '.docx':
                                            return "doc-file";
                                            case '.xls':
                                            case '.xlsx':
                                            return "xls-file";
                                            case '.pdf':
                                            return "pdf-file";
                                            case '.zip':
                                            case '.rar':
                                            return "zip-file";
                                            default:
                                            return "default-file";
                                        }
                                    }
                                    </script>

                                    <style>
                                    .file-icon {
                                        display: inline-block;
                                        float: left;
                                        width: 48px;
                                        height: 48px;
                                        margin-left: 10px;
                                        margin-top: 13.5px;
                                    }

                                    .img-file { background-image: url(../content/web/upload/jpg.png) }
                                    .doc-file { background-image: url(../content/web/upload/doc.png) }
                                    .pdf-file { background-image: url(../content/web/upload/pdf.png) }
                                    .xls-file { background-image: url(../content/web/upload/xls.png) }
                                    .zip-file { background-image: url(../content/web/upload/zip.png) }
                                    .default-file { background-image: url(../content/web/upload/default.png) }

                                    #example .file-heading {
                                        font-family: Arial;
                                        font-size: 1.1em;
                                        display: inline-block;
                                        float: left;
                                        width: 60%;
                                        margin: 0 0 0 20px;
                                        height: 25px;
                                        -ms-text-overflow: ellipsis;
                                        -o-text-overflow: ellipsis;
                                        text-overflow: ellipsis;
                                        overflow:hidden;
                                        white-space:nowrap;
                                    }

                                    #example .file-name-heading {
                                        font-weight: bold;
                                        margin-top: 20px;
                                    }

                                    #example .file-size-heading {
                                        font-weight: normal;
                                        font-style: italic;
                                    }

                                    li.k-file .file-wrapper .k-upload-action {
                                        position: absolute;
                                        top: 0;
                                        right: 0;
                                    }

                                    li.k-file div.file-wrapper {
                                        position: relative;
                                        height: 75px;
                                    }
                                    </style>
                                </div>
                                <ul class="list-home">
                                  
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                </div>


                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--DO NOT Remove The Footer Links-->
    <div class="footer">
        <p>&copy; Copyright 2016. Designed by <a target="_blank" href="http://www.techbloggers.com">www.techbloggers.com</a></p>

    </div>
</div>
</div>

<!--DO NOT Remove The Footer Links-->
<!--Designed by--><a target="_blank" href="http://www.htmltemplates.net">
<img src="images/footer.gif" class="copyright" alt="html templates"></a>
<!--DO NOT Remove The Footer Links-->

</body></html>