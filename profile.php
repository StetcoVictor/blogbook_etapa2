<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogbook</title>
    <script src="jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/master.css">
</head>
<body>

    <div id="navbar_wrapper">
        <div id="navbar">
            <img src="assets/logo_wide.png" id="navbar_logo">
            <div id="navbar_menu">
                <div class="navbar_item"><a href="home">Home</a></div>
                <div class="navbar_item"><a href="discover">Discover</a></div>
                <div class="navbar_item"><a href="profile">Profile</a></div>
            </div>
        </div>
    </div>

    <div id="content_area_wrapper">
        <div id="content_area">

            <div id="profile_area">
                <div id="profile_avatar" style="background-image:url('assets/defavt.png')"></div>
                <div id="profile_description">
                    <div id="profile_name">
                        <span>@Darkoholic</span>
                        <div id="logout_button">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sign-out-alt" class="svg-inline--fa fa-sign-out-alt fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#AAAAAA" d="M497 273L329 441c-15 15-41 4.5-41-17v-96H152c-13.3 0-24-10.7-24-24v-96c0-13.3 10.7-24 24-24h136V88c0-21.4 25.9-32 41-17l168 168c9.3 9.4 9.3 24.6 0 34zM192 436v-40c0-6.6-5.4-12-12-12H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h84c6.6 0 12-5.4 12-12V76c0-6.6-5.4-12-12-12H96c-53 0-96 43-96 96v192c0 53 43 96 96 96h84c6.6 0 12-5.4 12-12z"></path></svg>
                        </div>
                    </div>
                    <span id="profile_following"><b>210</b> followers and <b>106</b> following</span>
                    <span id="profile_posts"><b>10</b> published posts</span>
                </div>
            </div>

            <div class="post_wrapper">
                <div class="post_header">
                <a href="#"><div class="post_avatar" style="background-image:url('assets/defavt.png')"></div></a>
                    <div class="post_details">
                        <a href=""><span class="post_name">@Darkoholic</span></a>
                        <span class="post_date">Posted on 21.12.2020</span>
                    </div>
                    <div class="post_share_button">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 155.139 155.139" style="enable-background:new 0 0 155.139 155.139;" xml:space="preserve">
                        <path id="f_1_" style="fill:#ffffff;" d="M89.584,155.139V84.378h23.742l3.562-27.585H89.584V39.184 c0-7.984,2.208-13.425,13.67-13.425l14.595-0.006V1.08C115.325,0.752,106.661,0,96.577,0C75.52,0,61.104,12.853,61.104,36.452 v20.341H37.29v27.585h23.814v70.761H89.584z"/>
                    </svg>
                    Share
                </div>
                </div>
                <div class="post_container">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae accusantium id dolores dolore incidunt quod ex hic praesentium harum qui, dicta laborum ratione aliquam officiis quisquam nemo facere. Sed, distinctio?
                </div>
                <div class="post_comment_section">
                    <input type="text" class="post_comment_input" placeholder="Add a comment">
                    <div class="post_comment_wrapper">
                        <a href=""><div class="post_comment_header">
                            <div class="post_comment_avatar" style="background-image:url('assets/defavt.png')"></div>
                            <span class="post_comment_name">@commenter_124</span>
                        </div></a>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, quos architecto! Error in quaerat animi nisi officiis unde quas, iusto explicabo eaque ad sit. Veritatis, voluptate officia. Dolorum, id eveniet!
                    </div>
                </div>
            </div>

            
        </div>
    </div>

</body>
</html>