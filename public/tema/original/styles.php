<style type="text/css">
    :root {
        --main-light-color: #212529;
        --main-dark-color: #363a3e;
    }
    
    #master-topbg {
        background: url(<?php echo TOPO ?>) center;
        height: 80px;
    }
    
    #master-logo {
        height: 80px;
        width: 191px;
        background: url(<?php echo LOGO ?>) right center no-repeat;
    }
    
    #master-logo:hover {
        background-position: left;
    }
    
    #master-indexbigbg {
        color: #fff;
        background: url(https://i.imgur.com/n5bwuVO.png) no-repeat center;
    }
    
    #me-top-profile {
        background: url(https://habbo.city/habbo-imaging/avatarimage?figure=<?php echo ROUPA ?>&size=b&direction=2&head_direction=3&gesture=sml&action=wav&size=l) no-repeat center -40px, url(https://1.bp.blogspot.com/-qpavAM5uHiQ/Vt5BfOReKqI/AAAAAAAAkUU/T2GI3XqzWWc/s1600/wallpaper_bigWave.png) right bottom;
        border: none;
        padding: 0px;
        border-top-left-radius: 4px;
        border-top-right-radius: 4px;
        padding: 20px;
        min-height: 100px;
    }
    
    body {
        padding: 0;
        margin: 0px;
        background: #edf1f2;
        font-family: 'Open Sans', sans-serif;
        font-size: 13px;
        line-height: 1.42857143;
    }
    
    a:hover {
        text-decoration: none;
    }
    
    .navbar {
        background: #1e262c !important;
        border-bottom: 4px solid #1b2228;
        margin-bottom: 20px;
        font-size: 14px;
    }
    
    .nav-item.active {
        font-weight: bold;
    }
    
    .fas,
    .far {
        font-size: 16px;
    }
    
    .container {
        max-width: 1024px;
    }
    
    .dropdown-item,
    .dropdown-item.active,
    .dropdown-item:active {
        font-size: 13px;
        color: #1e262c;
        transition: all .2s ease-out;
    }
    
    .dropdown-item:hover {
        font-weight: bold;
    }
    
    .dropdown-item:active {
        background: initial;
    }
    
    .onlineUsersNumber {
        font-size: 22px;
        font-weight: bold;
        color: #474747;
        font-family: sans-serif;
        -webkit-animation: change-color 4s linear 0s infinite normal;
        animation: change-color 4s linear 0s infinite normal;
    }
    
    .list-header {
        background: #1e262c;
        color: #fff;
        font-size: 14px;
        font-weight: bold;
    }
    
    .form-control,
    .custom-select {
        padding: 7px 12px;
        font-size: 13px;
        border: 1px solid #e7e7e7;
        box-shadow: inset 0 2px 0 rgba(0, 0, 0, 0.075);
    }
    
    .form-group label {
        color: #1e262c;
        font-weight: bold;
    }
    
    .btn {
        font-weight: bold;
        font-size: 14px;
        border-width: 0px;
        border-bottom-width: 5px;
        border-color: rgba(0, 0, 0, .1) !important;
    }
    
    .btn-primary,
    .btn-primary:disabled {
        background-color: var(--main-light-color);
    }
    
    .btn-primary:hover,
    .btn-primary:active,
    .btn-primary.active,
    .btn-primary:focus,
    .btn-primary:not(:disabled):not(.disabled):active:focus {
        background-color: var(--main-dark-color) !important;
        border-color: rgba(0, 0, 0, .2) !important;
    }
    
    .alert-me {
        background-color: #1f272d;
        color: #ffffff;
        border-bottom: 4px solid #1b2228;
        padding: 5px 20px;
        margin-bottom: 5px;
    }
    
    .client-btn {
        font-size: 16px;
        font-weight: bold;
        text-align: center;
        color: #fff;
        background: var(--main-light-color);
        border-top: 1px solid var(--main-dark-color);
        padding: 10px;
        cursor: pointer;
        float: left;
        width: 100%;
        transition: all .2s ease-out;
    }
    
    .client-btn:hover {
        background: var(--main-dark-color);
    }
    
    .carousel-title {
        color: #fff;
        font-size: 16px;
        text-shadow: 2px 2px 10px rgba(0, 0, 0, .3);
        font-weight: bold;
    }
    
    .carousel-desc {
        color: #fff;
        font-size: 14px;
        text-shadow: 2px 2px 10px rgba(0, 0, 0, .5);
    }
    
    .feed-item-image {
        width: 50px;
        height: 70px;
        background-position: -9px -15px;
        margin-right: 5px;
        margin-top: -5px;
        float: left;
    }
    
    .feed-item {
        padding-left: 5px;
        overflow: auto;
    }
    
    .feed-item-body {
        width: calc(100% - 55px);
        float: left;
    }
    
    .feed-item-timestamp {
        float: right;
        font-size: 11px;
    }
    
    .feed-item-title {
        font-weight: bold;
        font-size: 14px;
        margin-bottom: 5px;
    }
    
    .feed-item-content.commenting {
        padding: 0;
        padding-top: 5px;
    }
    
    .feed-item-actions a {
        margin-right: 10px;
        color: rgba(0, 0, 0, .8);
    }
    
    .emoji-list {
        float: left;
        max-width: calc(100% - 145px);
        max-height: 100px;
        overflow: hidden;
    }
    
    .emoji-list-long {
        max-width: 100%;
        max-height: 100px;
        margin-bottom: 10px;
        overflow: hidden;
    }
    
    .emoji-list img,
    .emoji-list-long img {
        cursor: pointer;
        opacity: .7;
        transition: all .2s ease-out;
    }
    
    .emoji-list img:hover,
    .emoji-list-long img:hover {
        opacity: 1;
    }
    
    .emoji-list.closed,
    .emoji-list-long.closed {
        max-width: 20px;
        max-height: 20px;
    }
    
    .embed-responsive {
        border-radius: 4px;
        overflow: hidden;
    }
    
    .img-responsive,
    .thumbnail>img,
    .thumbnail a>img,
    .carousel-inner>.item>img,
    .carousel-inner>.item>a>img {
        display: block;
        max-width: 100%;
        height: auto;
        margin-bottom: 10px;
        border-radius: 4px;
    }
    
    .more-less {
        max-height: 400px;
        overflow: hidden;
        position: relative;
    }
    
    .readMore {
        position: absolute;
        bottom: 0px;
        z-index: 999;
        display: none;
        width: 100%;
        background-color: #FFFFD9;
        padding: 5px;
        text-align: center;
    }
    
    .embed-responsive {
        margin-bottom: 10px;
    }
    
    .updateFeedBtn {
        text-align: center;
        cursor: pointer;
        color: #fff;
        font-weight: bold;
        background: var(--main-light-color);
        transition: all .2s ease-out;
    }
    
    .updateFeedBtn:hover {
        background: var(--main-dark-color);
    }
    
    .embed-article {
        box-shadow: 2px 2px 10px rgba(0, 0, 0, .1);
        height: 120px;
        padding: 20px;
        border-radius: 4px;
        margin-bottom: 10px;
    }
    
    .embed-article-title {
        font-size: 18px;
        color: #212529;
        font-weight: bold;
        margin-bottom: 10px;
    }
    
    .embed-article-desc {
        color: #212529;
    }
    
    #articleTopImage {
        width: 100%;
        padding: .75rem 1.25rem;
        border-bottom: 1px solid rgba(0, 0, 0, .125);
        border-top-left-radius: 4px;
        border-top-right-radius: 4px;
        font-size: 14px;
        font-weight: bold;
    }
    
    #article-body {
        width: 560px;
        font-family: verdana;
        font-size: 11px;
        padding: 10px 15px 0px 15px;
    }
    
    #article-footer {
        width: 559px;
        padding: 0px 15px 0px 10px;
        border-top: 1px solid rgba(0, 0, 0, .125);
        background: rgba(0, 0, 0, .03);
    }
    
    #article-body img {
        max-width: 100%;
    }
    
    #article-body p {
        margin: 0 0 10px;
    }
    
    .article-author {
        float: left;
        margin-top: 10px;
    }
    
    .article-author-image {
        width: 50px;
        height: 60px;
        background-position: -10px -10px;
        float: left;
    }
    
    .article-reaction {
        font-size: 13px;
        line-height: 20px;
        background: rgba(0, 0, 0, .03);
        margin-right: 5px;
        margin-bottom: 5px;
        cursor: pointer;
        border: 1px solid rgba(0, 0, 0, .125);
    }
    
    .article-reaction.given {
        color: #0960a5;
        background: rgba(3, 169, 244, .2);
    }
    
    .article-reaction.add-reaction {
        opacity: .5;
    }
    
    .article-reaction.add-reaction i {
        font-size: 11px;
    }
    
    .article-reaction.add-reaction:hover {
        opacity: 1;
    }
    
    .article-reaction img {
        margin-right: 10px;
        float: left;
    }
    
    .user-reaction {
        float: left;
        width: 50px;
        height: 50px;
        background-position: -9px -10px;
    }
    
    #hall-of-fame {
        background: url(https://i.imgur.com/2JGA0l0.png) center;
        border: none;
        padding: 0px;
        border-top-left-radius: 4px;
        border-top-right-radius: 4px;
        padding: 20px;
        min-height: 100px;
    }
    
    .user-profile-image {
        width: 70px;
        height: 85px;
        float: left;
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px;
        margin-right: 5px;
    }
    
    .user-profile-content {
        padding-top: 10px;
        width: calc(100% - 75px);
        float: left;
    }
    
    .payment-method {
        overflow: hidden;
        max-height: 45px;
        cursor: pointer;
        transition: all .2s ease-out;
    }
    
    .payment-method.open {
        cursor: initial;
        max-height: unset;
    }
    
    .podium {
        overflow: auto;
        padding: 0px;
        border: none;
        min-height: 130px;
    }
    
    .podium-1 {
        background-position: center -30px;
    }
    
    .podium-2 {
        background-position: -15px -10px;
    }
    
    .podium-3 {
        background-position: 105% -10px;
    }
    
    .podium-1,
    .podium-2,
    .podium-3 {
        background-repeat: no-repeat;
        height: 130px;
        width: 100%;
        position: absolute;
    }
    
    .podium-sector {
        position: absolute;
        text-align: center;
        opacity: 0;
        transition: all .2s ease-out;
        font-size: 16px;
        color: #fff;
        font-weight: bold;
        text-shadow: 2px 2px 10px rgba(0, 0, 0, .5);
    }
    
    .podium-sector:hover {
        opacity: 1;
    }
    
    .floatingEffect {
        transition: all .5s ease;
        animation-direction: alternate;
        animation-duration: 1s;
        animation-iteration-count: infinite;
        animation-name: float-landing-2wj_IS;
        animation-timing-function: ease-in-out;
    }
    
    @-webkit-keyframes float-landing-2wj_IS {
        0% {
            -webkit-transform: translate3d(0, -2px, 0);
            transform: translate3d(0, -2px, 0)
        }
        to {
            -webkit-transform: translate3d(0, 2px, 0);
            transform: translate3d(0, 2px, 0)
        }
    }
    
    @keyframes float-landing-2wj_IS {
        0% {
            -webkit-transform: translate3d(0, -2px, 0);
            transform: translate3d(0, -2px, 0)
        }
        to {
            -webkit-transform: translate3d(0, 2px, 0);
            transform: translate3d(0, 2px, 0)
        }
    }
    
    .feed-poll-option {
        margin-bottom: 10px;
    }
    
    .feed-poll {
        padding: 10px 0 10px;
        max-height: 222px;
        overflow: hidden;
        border-top: 1px solid rgba(0, 0, 0, .1);
    }
    
    .feed-poll-option-radio {
        background: rgba(0, 0, 0, .03);
        border-radius: 4px;
        padding: 3px 10px;
        line-height: 24px;
        margin-top: 5px;
        cursor: pointer;
        font-weight: bold;
        transition: all .2s ease-out;
    }
    
    .feed-poll-option-radio:hover,
    .feed-poll-option-radio.selected {
        background: rgba(0, 123, 255, .1);
    }
    
    .feed-poll .progress {
        width: calc(100% - 50px);
        height: 30px;
        margin-bottom: 10px;
        background: transparent;
    }
    
    .feed-poll .progress-bar {
        text-align: left;
        background: rgba(0, 0, 0, .05);
        color: #212529;
        font-weight: bold;
    }
    
    .feed-poll .progress-bar div {
        text-align: left;
        padding-left: 10px;
    }
    
    .feed-poll .option-percentage {
        float: left;
        width: 50px;
        font-size: 14px;
        line-height: 30px;
        text-align: center;
        font-weight: bold;
    }
    
    .cookies-warning {
        position: fixed;
        bottom: 0;
        font-size: 16px;
        padding: 20px 25px;
        background: #e91e63;
        width: 100%;
        color: #fff;
        font-weight: bold;
        display: none;
        z-index: 99999999;
        cursor: pointer;
    }
</style>