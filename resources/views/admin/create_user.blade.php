<!DOCTYPE html>
<html style="height: auto;">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style type="text/css">
    .swal-icon--error {
        border-color: #f27474;
        -webkit-animation: animateErrorIcon .5s;
        animation: animateErrorIcon .5s
    }

    .swal-icon--error__x-mark {
        position: relative;
        display: block;
        -webkit-animation: animateXMark .5s;
        animation: animateXMark .5s
    }

    .swal-icon--error__line {
        position: absolute;
        height: 5px;
        width: 47px;
        background-color: #f27474;
        display: block;
        top: 37px;
        border-radius: 2px
    }

    .swal-icon--error__line--left {
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        left: 17px
    }

    .swal-icon--error__line--right {
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        right: 16px
    }

    @-webkit-keyframes animateErrorIcon {
        0% {
            -webkit-transform: rotateX(100deg);
            transform: rotateX(100deg);
            opacity: 0
        }

        to {
            -webkit-transform: rotateX(0deg);
            transform: rotateX(0deg);
            opacity: 1
        }
    }

    @keyframes animateErrorIcon {
        0% {
            -webkit-transform: rotateX(100deg);
            transform: rotateX(100deg);
            opacity: 0
        }

        to {
            -webkit-transform: rotateX(0deg);
            transform: rotateX(0deg);
            opacity: 1
        }
    }

    @-webkit-keyframes animateXMark {
        0% {
            -webkit-transform: scale(.4);
            transform: scale(.4);
            margin-top: 26px;
            opacity: 0
        }

        50% {
            -webkit-transform: scale(.4);
            transform: scale(.4);
            margin-top: 26px;
            opacity: 0
        }

        80% {
            -webkit-transform: scale(1.15);
            transform: scale(1.15);
            margin-top: -6px
        }

        to {
            -webkit-transform: scale(1);
            transform: scale(1);
            margin-top: 0;
            opacity: 1
        }
    }

    @keyframes animateXMark {
        0% {
            -webkit-transform: scale(.4);
            transform: scale(.4);
            margin-top: 26px;
            opacity: 0
        }

        50% {
            -webkit-transform: scale(.4);
            transform: scale(.4);
            margin-top: 26px;
            opacity: 0
        }

        80% {
            -webkit-transform: scale(1.15);
            transform: scale(1.15);
            margin-top: -6px
        }

        to {
            -webkit-transform: scale(1);
            transform: scale(1);
            margin-top: 0;
            opacity: 1
        }
    }

    .swal-icon--warning {
        border-color: #f8bb86;
        -webkit-animation: pulseWarning .75s infinite alternate;
        animation: pulseWarning .75s infinite alternate
    }

    .swal-icon--warning__body {
        width: 5px;
        height: 47px;
        top: 10px;
        border-radius: 2px;
        margin-left: -2px
    }

    .swal-icon--warning__body,
    .swal-icon--warning__dot {
        position: absolute;
        left: 50%;
        background-color: #f8bb86
    }

    .swal-icon--warning__dot {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        margin-left: -4px;
        bottom: -11px
    }

    @-webkit-keyframes pulseWarning {
        0% {
            border-color: #f8d486
        }

        to {
            border-color: #f8bb86
        }
    }

    @keyframes pulseWarning {
        0% {
            border-color: #f8d486
        }

        to {
            border-color: #f8bb86
        }
    }

    .swal-icon--success {
        border-color: #a5dc86
    }

    .swal-icon--success:after,
    .swal-icon--success:before {
        content: "";
        border-radius: 50%;
        position: absolute;
        width: 60px;
        height: 120px;
        background: #fff;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg)
    }

    .swal-icon--success:before {
        border-radius: 120px 0 0 120px;
        top: -7px;
        left: -33px;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        -webkit-transform-origin: 60px 60px;
        transform-origin: 60px 60px
    }

    .swal-icon--success:after {
        border-radius: 0 120px 120px 0;
        top: -11px;
        left: 30px;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        -webkit-transform-origin: 0 60px;
        transform-origin: 0 60px;
        -webkit-animation: rotatePlaceholder 4.25s ease-in;
        animation: rotatePlaceholder 4.25s ease-in
    }

    .swal-icon--success__ring {
        width: 80px;
        height: 80px;
        border: 4px solid hsla(98, 55%, 69%, .2);
        border-radius: 50%;
        box-sizing: content-box;
        position: absolute;
        left: -4px;
        top: -4px;
        z-index: 2
    }

    .swal-icon--success__hide-corners {
        width: 5px;
        height: 90px;
        background-color: #fff;
        padding: 1px;
        position: absolute;
        left: 28px;
        top: 8px;
        z-index: 1;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg)
    }

    .swal-icon--success__line {
        height: 5px;
        background-color: #a5dc86;
        display: block;
        border-radius: 2px;
        position: absolute;
        z-index: 2
    }

    .swal-icon--success__line--tip {
        width: 25px;
        left: 14px;
        top: 46px;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        -webkit-animation: animateSuccessTip .75s;
        animation: animateSuccessTip .75s
    }

    .swal-icon--success__line--long {
        width: 47px;
        right: 8px;
        top: 38px;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        -webkit-animation: animateSuccessLong .75s;
        animation: animateSuccessLong .75s
    }

    @-webkit-keyframes rotatePlaceholder {
        0% {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }

        5% {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }

        12% {
            -webkit-transform: rotate(-405deg);
            transform: rotate(-405deg)
        }

        to {
            -webkit-transform: rotate(-405deg);
            transform: rotate(-405deg)
        }
    }

    @keyframes rotatePlaceholder {
        0% {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }

        5% {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }

        12% {
            -webkit-transform: rotate(-405deg);
            transform: rotate(-405deg)
        }

        to {
            -webkit-transform: rotate(-405deg);
            transform: rotate(-405deg)
        }
    }

    @-webkit-keyframes animateSuccessTip {
        0% {
            width: 0;
            left: 1px;
            top: 19px
        }

        54% {
            width: 0;
            left: 1px;
            top: 19px
        }

        70% {
            width: 50px;
            left: -8px;
            top: 37px
        }

        84% {
            width: 17px;
            left: 21px;
            top: 48px
        }

        to {
            width: 25px;
            left: 14px;
            top: 45px
        }
    }

    @keyframes animateSuccessTip {
        0% {
            width: 0;
            left: 1px;
            top: 19px
        }

        54% {
            width: 0;
            left: 1px;
            top: 19px
        }

        70% {
            width: 50px;
            left: -8px;
            top: 37px
        }

        84% {
            width: 17px;
            left: 21px;
            top: 48px
        }

        to {
            width: 25px;
            left: 14px;
            top: 45px
        }
    }

    @-webkit-keyframes animateSuccessLong {
        0% {
            width: 0;
            right: 46px;
            top: 54px
        }

        65% {
            width: 0;
            right: 46px;
            top: 54px
        }

        84% {
            width: 55px;
            right: 0;
            top: 35px
        }

        to {
            width: 47px;
            right: 8px;
            top: 38px
        }
    }

    @keyframes animateSuccessLong {
        0% {
            width: 0;
            right: 46px;
            top: 54px
        }

        65% {
            width: 0;
            right: 46px;
            top: 54px
        }

        84% {
            width: 55px;
            right: 0;
            top: 35px
        }

        to {
            width: 47px;
            right: 8px;
            top: 38px
        }
    }

    .swal-icon--info {
        border-color: #c9dae1
    }

    .swal-icon--info:before {
        width: 5px;
        height: 29px;
        bottom: 17px;
        border-radius: 2px;
        margin-left: -2px
    }

    .swal-icon--info:after,
    .swal-icon--info:before {
        content: "";
        position: absolute;
        left: 50%;
        background-color: #c9dae1
    }

    .swal-icon--info:after {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        margin-left: -3px;
        top: 19px
    }

    .swal-icon {
        width: 80px;
        height: 80px;
        border-width: 4px;
        border-style: solid;
        border-radius: 50%;
        padding: 0;
        position: relative;
        box-sizing: content-box;
        margin: 20px auto
    }

    .swal-icon:first-child {
        margin-top: 32px
    }

    .swal-icon--custom {
        width: auto;
        height: auto;
        max-width: 100%;
        border: none;
        border-radius: 0
    }

    .swal-icon img {
        max-width: 100%;
        max-height: 100%
    }

    .swal-title {
        color: rgba(0, 0, 0, .65);
        font-weight: 600;
        text-transform: none;
        position: relative;
        display: block;
        padding: 13px 16px;
        font-size: 27px;
        line-height: normal;
        text-align: center;
        margin-bottom: 0
    }

    .swal-title:first-child {
        margin-top: 26px
    }

    .swal-title:not(:first-child) {
        padding-bottom: 0
    }

    .swal-title:not(:last-child) {
        margin-bottom: 13px
    }

    .swal-text {
        font-size: 16px;
        position: relative;
        float: none;
        line-height: normal;
        vertical-align: top;
        text-align: left;
        display: inline-block;
        margin: 0;
        padding: 0 10px;
        font-weight: 400;
        color: rgba(0, 0, 0, .64);
        max-width: calc(100% - 20px);
        overflow-wrap: break-word;
        box-sizing: border-box
    }

    .swal-text:first-child {
        margin-top: 45px
    }

    .swal-text:last-child {
        margin-bottom: 45px
    }

    .swal-footer {
        text-align: right;
        padding-top: 13px;
        margin-top: 13px;
        padding: 13px 16px;
        border-radius: inherit;
        border-top-left-radius: 0;
        border-top-right-radius: 0
    }

    .swal-button-container {
        margin: 5px;
        display: inline-block;
        position: relative
    }

    .swal-button {
        background-color: #7cd1f9;
        color: #fff;
        border: none;
        box-shadow: none;
        border-radius: 5px;
        font-weight: 600;
        font-size: 14px;
        padding: 10px 24px;
        margin: 0;
        cursor: pointer
    }

    .swal-button:not([disabled]):hover {
        background-color: #78cbf2
    }

    .swal-button:active {
        background-color: #70bce0
    }

    .swal-button:focus {
        outline: none;
        box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(43, 114, 165, .29)
    }

    .swal-button[disabled] {
        opacity: .5;
        cursor: default
    }

    .swal-button::-moz-focus-inner {
        border: 0
    }

    .swal-button--cancel {
        color: #555;
        background-color: #efefef
    }

    .swal-button--cancel:not([disabled]):hover {
        background-color: #e8e8e8
    }

    .swal-button--cancel:active {
        background-color: #d7d7d7
    }

    .swal-button--cancel:focus {
        box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(116, 136, 150, .29)
    }

    .swal-button--danger {
        background-color: #e64942
    }

    .swal-button--danger:not([disabled]):hover {
        background-color: #df4740
    }

    .swal-button--danger:active {
        background-color: #cf423b
    }

    .swal-button--danger:focus {
        box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(165, 43, 43, .29)
    }

    .swal-content {
        padding: 0 20px;
        margin-top: 20px;
        font-size: medium
    }

    .swal-content:last-child {
        margin-bottom: 20px
    }

    .swal-content__input,
    .swal-content__textarea {
        -webkit-appearance: none;
        background-color: #fff;
        border: none;
        font-size: 14px;
        display: block;
        box-sizing: border-box;
        width: 100%;
        border: 1px solid rgba(0, 0, 0, .14);
        padding: 10px 13px;
        border-radius: 2px;
        transition: border-color .2s
    }

    .swal-content__input:focus,
    .swal-content__textarea:focus {
        outline: none;
        border-color: #6db8ff
    }

    .swal-content__textarea {
        resize: vertical
    }

    .swal-button--loading {
        color: transparent
    }

    .swal-button--loading~.swal-button__loader {
        opacity: 1
    }

    .swal-button__loader {
        position: absolute;
        height: auto;
        width: 43px;
        z-index: 2;
        left: 50%;
        top: 50%;
        -webkit-transform: translateX(-50%) translateY(-50%);
        transform: translateX(-50%) translateY(-50%);
        text-align: center;
        pointer-events: none;
        opacity: 0
    }

    .swal-button__loader div {
        display: inline-block;
        float: none;
        vertical-align: baseline;
        width: 9px;
        height: 9px;
        padding: 0;
        border: none;
        margin: 2px;
        opacity: .4;
        border-radius: 7px;
        background-color: hsla(0, 0%, 100%, .9);
        transition: background .2s;
        -webkit-animation: swal-loading-anim 1s infinite;
        animation: swal-loading-anim 1s infinite
    }

    .swal-button__loader div:nth-child(3n+2) {
        -webkit-animation-delay: .15s;
        animation-delay: .15s
    }

    .swal-button__loader div:nth-child(3n+3) {
        -webkit-animation-delay: .3s;
        animation-delay: .3s
    }

    @-webkit-keyframes swal-loading-anim {
        0% {
            opacity: .4
        }

        20% {
            opacity: .4
        }

        50% {
            opacity: 1
        }

        to {
            opacity: .4
        }
    }

    @keyframes swal-loading-anim {
        0% {
            opacity: .4
        }

        20% {
            opacity: .4
        }

        50% {
            opacity: 1
        }

        to {
            opacity: .4
        }
    }

    .swal-overlay {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        text-align: center;
        font-size: 0;
        overflow-y: auto;
        background-color: rgba(0, 0, 0, .4);
        z-index: 10000;
        pointer-events: none;
        opacity: 0;
        transition: opacity .3s
    }

    .swal-overlay:before {
        content: " ";
        display: inline-block;
        vertical-align: middle;
        height: 100%
    }

    .swal-overlay--show-modal {
        opacity: 1;
        pointer-events: auto
    }

    .swal-overlay--show-modal .swal-modal {
        opacity: 1;
        pointer-events: auto;
        box-sizing: border-box;
        -webkit-animation: showSweetAlert .3s;
        animation: showSweetAlert .3s;
        will-change: transform
    }

    .swal-modal {
        width: 478px;
        opacity: 0;
        pointer-events: none;
        background-color: #fff;
        text-align: center;
        border-radius: 5px;
        position: static;
        margin: 20px auto;
        display: inline-block;
        vertical-align: middle;
        -webkit-transform: scale(1);
        transform: scale(1);
        -webkit-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
        z-index: 10001;
        transition: opacity .2s, -webkit-transform .3s;
        transition: transform .3s, opacity .2s;
        transition: transform .3s, opacity .2s, -webkit-transform .3s
    }

    @media (max-width:500px) {
        .swal-modal {
            width: calc(100% - 20px)
        }
    }

    @-webkit-keyframes showSweetAlert {
        0% {
            -webkit-transform: scale(1);
            transform: scale(1)
        }

        1% {
            -webkit-transform: scale(.5);
            transform: scale(.5)
        }

        45% {
            -webkit-transform: scale(1.05);
            transform: scale(1.05)
        }

        80% {
            -webkit-transform: scale(.95);
            transform: scale(.95)
        }

        to {
            -webkit-transform: scale(1);
            transform: scale(1)
        }
    }

    @keyframes showSweetAlert {
        0% {
            -webkit-transform: scale(1);
            transform: scale(1)
        }

        1% {
            -webkit-transform: scale(.5);
            transform: scale(.5)
        }

        45% {
            -webkit-transform: scale(1.05);
            transform: scale(1.05)
        }

        80% {
            -webkit-transform: scale(.95);
            transform: scale(.95)
        }

        to {
            -webkit-transform: scale(1);
            transform: scale(1)
        }
    }
    </style>
    <style type="text/css">
    .swal-icon--error {
        border-color: #f27474;
        -webkit-animation: animateErrorIcon .5s;
        animation: animateErrorIcon .5s
    }

    .swal-icon--error__x-mark {
        position: relative;
        display: block;
        -webkit-animation: animateXMark .5s;
        animation: animateXMark .5s
    }

    .swal-icon--error__line {
        position: absolute;
        height: 5px;
        width: 47px;
        background-color: #f27474;
        display: block;
        top: 37px;
        border-radius: 2px
    }

    .swal-icon--error__line--left {
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        left: 17px
    }

    .swal-icon--error__line--right {
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        right: 16px
    }

    @-webkit-keyframes animateErrorIcon {
        0% {
            -webkit-transform: rotateX(100deg);
            transform: rotateX(100deg);
            opacity: 0
        }

        to {
            -webkit-transform: rotateX(0deg);
            transform: rotateX(0deg);
            opacity: 1
        }
    }

    @keyframes animateErrorIcon {
        0% {
            -webkit-transform: rotateX(100deg);
            transform: rotateX(100deg);
            opacity: 0
        }

        to {
            -webkit-transform: rotateX(0deg);
            transform: rotateX(0deg);
            opacity: 1
        }
    }

    @-webkit-keyframes animateXMark {
        0% {
            -webkit-transform: scale(.4);
            transform: scale(.4);
            margin-top: 26px;
            opacity: 0
        }

        50% {
            -webkit-transform: scale(.4);
            transform: scale(.4);
            margin-top: 26px;
            opacity: 0
        }

        80% {
            -webkit-transform: scale(1.15);
            transform: scale(1.15);
            margin-top: -6px
        }

        to {
            -webkit-transform: scale(1);
            transform: scale(1);
            margin-top: 0;
            opacity: 1
        }
    }

    @keyframes animateXMark {
        0% {
            -webkit-transform: scale(.4);
            transform: scale(.4);
            margin-top: 26px;
            opacity: 0
        }

        50% {
            -webkit-transform: scale(.4);
            transform: scale(.4);
            margin-top: 26px;
            opacity: 0
        }

        80% {
            -webkit-transform: scale(1.15);
            transform: scale(1.15);
            margin-top: -6px
        }

        to {
            -webkit-transform: scale(1);
            transform: scale(1);
            margin-top: 0;
            opacity: 1
        }
    }

    .swal-icon--warning {
        border-color: #f8bb86;
        -webkit-animation: pulseWarning .75s infinite alternate;
        animation: pulseWarning .75s infinite alternate
    }

    .swal-icon--warning__body {
        width: 5px;
        height: 47px;
        top: 10px;
        border-radius: 2px;
        margin-left: -2px
    }

    .swal-icon--warning__body,
    .swal-icon--warning__dot {
        position: absolute;
        left: 50%;
        background-color: #f8bb86
    }

    .swal-icon--warning__dot {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        margin-left: -4px;
        bottom: -11px
    }

    @-webkit-keyframes pulseWarning {
        0% {
            border-color: #f8d486
        }

        to {
            border-color: #f8bb86
        }
    }

    @keyframes pulseWarning {
        0% {
            border-color: #f8d486
        }

        to {
            border-color: #f8bb86
        }
    }

    .swal-icon--success {
        border-color: #a5dc86
    }

    .swal-icon--success:after,
    .swal-icon--success:before {
        content: "";
        border-radius: 50%;
        position: absolute;
        width: 60px;
        height: 120px;
        background: #fff;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg)
    }

    .swal-icon--success:before {
        border-radius: 120px 0 0 120px;
        top: -7px;
        left: -33px;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        -webkit-transform-origin: 60px 60px;
        transform-origin: 60px 60px
    }

    .swal-icon--success:after {
        border-radius: 0 120px 120px 0;
        top: -11px;
        left: 30px;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        -webkit-transform-origin: 0 60px;
        transform-origin: 0 60px;
        -webkit-animation: rotatePlaceholder 4.25s ease-in;
        animation: rotatePlaceholder 4.25s ease-in
    }

    .swal-icon--success__ring {
        width: 80px;
        height: 80px;
        border: 4px solid hsla(98, 55%, 69%, .2);
        border-radius: 50%;
        box-sizing: content-box;
        position: absolute;
        left: -4px;
        top: -4px;
        z-index: 2
    }

    .swal-icon--success__hide-corners {
        width: 5px;
        height: 90px;
        background-color: #fff;
        padding: 1px;
        position: absolute;
        left: 28px;
        top: 8px;
        z-index: 1;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg)
    }

    .swal-icon--success__line {
        height: 5px;
        background-color: #a5dc86;
        display: block;
        border-radius: 2px;
        position: absolute;
        z-index: 2
    }

    .swal-icon--success__line--tip {
        width: 25px;
        left: 14px;
        top: 46px;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        -webkit-animation: animateSuccessTip .75s;
        animation: animateSuccessTip .75s
    }

    .swal-icon--success__line--long {
        width: 47px;
        right: 8px;
        top: 38px;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        -webkit-animation: animateSuccessLong .75s;
        animation: animateSuccessLong .75s
    }

    @-webkit-keyframes rotatePlaceholder {
        0% {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }

        5% {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }

        12% {
            -webkit-transform: rotate(-405deg);
            transform: rotate(-405deg)
        }

        to {
            -webkit-transform: rotate(-405deg);
            transform: rotate(-405deg)
        }
    }

    @keyframes rotatePlaceholder {
        0% {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }

        5% {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }

        12% {
            -webkit-transform: rotate(-405deg);
            transform: rotate(-405deg)
        }

        to {
            -webkit-transform: rotate(-405deg);
            transform: rotate(-405deg)
        }
    }

    @-webkit-keyframes animateSuccessTip {
        0% {
            width: 0;
            left: 1px;
            top: 19px
        }

        54% {
            width: 0;
            left: 1px;
            top: 19px
        }

        70% {
            width: 50px;
            left: -8px;
            top: 37px
        }

        84% {
            width: 17px;
            left: 21px;
            top: 48px
        }

        to {
            width: 25px;
            left: 14px;
            top: 45px
        }
    }

    @keyframes animateSuccessTip {
        0% {
            width: 0;
            left: 1px;
            top: 19px
        }

        54% {
            width: 0;
            left: 1px;
            top: 19px
        }

        70% {
            width: 50px;
            left: -8px;
            top: 37px
        }

        84% {
            width: 17px;
            left: 21px;
            top: 48px
        }

        to {
            width: 25px;
            left: 14px;
            top: 45px
        }
    }

    @-webkit-keyframes animateSuccessLong {
        0% {
            width: 0;
            right: 46px;
            top: 54px
        }

        65% {
            width: 0;
            right: 46px;
            top: 54px
        }

        84% {
            width: 55px;
            right: 0;
            top: 35px
        }

        to {
            width: 47px;
            right: 8px;
            top: 38px
        }
    }

    @keyframes animateSuccessLong {
        0% {
            width: 0;
            right: 46px;
            top: 54px
        }

        65% {
            width: 0;
            right: 46px;
            top: 54px
        }

        84% {
            width: 55px;
            right: 0;
            top: 35px
        }

        to {
            width: 47px;
            right: 8px;
            top: 38px
        }
    }

    .swal-icon--info {
        border-color: #c9dae1
    }

    .swal-icon--info:before {
        width: 5px;
        height: 29px;
        bottom: 17px;
        border-radius: 2px;
        margin-left: -2px
    }

    .swal-icon--info:after,
    .swal-icon--info:before {
        content: "";
        position: absolute;
        left: 50%;
        background-color: #c9dae1
    }

    .swal-icon--info:after {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        margin-left: -3px;
        top: 19px
    }

    .swal-icon {
        width: 80px;
        height: 80px;
        border-width: 4px;
        border-style: solid;
        border-radius: 50%;
        padding: 0;
        position: relative;
        box-sizing: content-box;
        margin: 20px auto
    }

    .swal-icon:first-child {
        margin-top: 32px
    }

    .swal-icon--custom {
        width: auto;
        height: auto;
        max-width: 100%;
        border: none;
        border-radius: 0
    }

    .swal-icon img {
        max-width: 100%;
        max-height: 100%
    }

    .swal-title {
        color: rgba(0, 0, 0, .65);
        font-weight: 600;
        text-transform: none;
        position: relative;
        display: block;
        padding: 13px 16px;
        font-size: 27px;
        line-height: normal;
        text-align: center;
        margin-bottom: 0
    }

    .swal-title:first-child {
        margin-top: 26px
    }

    .swal-title:not(:first-child) {
        padding-bottom: 0
    }

    .swal-title:not(:last-child) {
        margin-bottom: 13px
    }

    .swal-text {
        font-size: 16px;
        position: relative;
        float: none;
        line-height: normal;
        vertical-align: top;
        text-align: left;
        display: inline-block;
        margin: 0;
        padding: 0 10px;
        font-weight: 400;
        color: rgba(0, 0, 0, .64);
        max-width: calc(100% - 20px);
        overflow-wrap: break-word;
        box-sizing: border-box
    }

    .swal-text:first-child {
        margin-top: 45px
    }

    .swal-text:last-child {
        margin-bottom: 45px
    }

    .swal-footer {
        text-align: right;
        padding-top: 13px;
        margin-top: 13px;
        padding: 13px 16px;
        border-radius: inherit;
        border-top-left-radius: 0;
        border-top-right-radius: 0
    }

    .swal-button-container {
        margin: 5px;
        display: inline-block;
        position: relative
    }

    .swal-button {
        background-color: #7cd1f9;
        color: #fff;
        border: none;
        box-shadow: none;
        border-radius: 5px;
        font-weight: 600;
        font-size: 14px;
        padding: 10px 24px;
        margin: 0;
        cursor: pointer
    }

    .swal-button:not([disabled]):hover {
        background-color: #78cbf2
    }

    .swal-button:active {
        background-color: #70bce0
    }

    .swal-button:focus {
        outline: none;
        box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(43, 114, 165, .29)
    }

    .swal-button[disabled] {
        opacity: .5;
        cursor: default
    }

    .swal-button::-moz-focus-inner {
        border: 0
    }

    .swal-button--cancel {
        color: #555;
        background-color: #efefef
    }

    .swal-button--cancel:not([disabled]):hover {
        background-color: #e8e8e8
    }

    .swal-button--cancel:active {
        background-color: #d7d7d7
    }

    .swal-button--cancel:focus {
        box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(116, 136, 150, .29)
    }

    .swal-button--danger {
        background-color: #e64942
    }

    .swal-button--danger:not([disabled]):hover {
        background-color: #df4740
    }

    .swal-button--danger:active {
        background-color: #cf423b
    }

    .swal-button--danger:focus {
        box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(165, 43, 43, .29)
    }

    .swal-content {
        padding: 0 20px;
        margin-top: 20px;
        font-size: medium
    }

    .swal-content:last-child {
        margin-bottom: 20px
    }

    .swal-content__input,
    .swal-content__textarea {
        -webkit-appearance: none;
        background-color: #fff;
        border: none;
        font-size: 14px;
        display: block;
        box-sizing: border-box;
        width: 100%;
        border: 1px solid rgba(0, 0, 0, .14);
        padding: 10px 13px;
        border-radius: 2px;
        transition: border-color .2s
    }

    .swal-content__input:focus,
    .swal-content__textarea:focus {
        outline: none;
        border-color: #6db8ff
    }

    .swal-content__textarea {
        resize: vertical
    }

    .swal-button--loading {
        color: transparent
    }

    .swal-button--loading~.swal-button__loader {
        opacity: 1
    }

    .swal-button__loader {
        position: absolute;
        height: auto;
        width: 43px;
        z-index: 2;
        left: 50%;
        top: 50%;
        -webkit-transform: translateX(-50%) translateY(-50%);
        transform: translateX(-50%) translateY(-50%);
        text-align: center;
        pointer-events: none;
        opacity: 0
    }

    .swal-button__loader div {
        display: inline-block;
        float: none;
        vertical-align: baseline;
        width: 9px;
        height: 9px;
        padding: 0;
        border: none;
        margin: 2px;
        opacity: .4;
        border-radius: 7px;
        background-color: hsla(0, 0%, 100%, .9);
        transition: background .2s;
        -webkit-animation: swal-loading-anim 1s infinite;
        animation: swal-loading-anim 1s infinite
    }

    .swal-button__loader div:nth-child(3n+2) {
        -webkit-animation-delay: .15s;
        animation-delay: .15s
    }

    .swal-button__loader div:nth-child(3n+3) {
        -webkit-animation-delay: .3s;
        animation-delay: .3s
    }

    @-webkit-keyframes swal-loading-anim {
        0% {
            opacity: .4
        }

        20% {
            opacity: .4
        }

        50% {
            opacity: 1
        }

        to {
            opacity: .4
        }
    }

    @keyframes swal-loading-anim {
        0% {
            opacity: .4
        }

        20% {
            opacity: .4
        }

        50% {
            opacity: 1
        }

        to {
            opacity: .4
        }
    }

    .swal-overlay {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        text-align: center;
        font-size: 0;
        overflow-y: auto;
        background-color: rgba(0, 0, 0, .4);
        z-index: 10000;
        pointer-events: none;
        opacity: 0;
        transition: opacity .3s
    }

    .swal-overlay:before {
        content: " ";
        display: inline-block;
        vertical-align: middle;
        height: 100%
    }

    .swal-overlay--show-modal {
        opacity: 1;
        pointer-events: auto
    }

    .swal-overlay--show-modal .swal-modal {
        opacity: 1;
        pointer-events: auto;
        box-sizing: border-box;
        -webkit-animation: showSweetAlert .3s;
        animation: showSweetAlert .3s;
        will-change: transform
    }

    .swal-modal {
        width: 478px;
        opacity: 0;
        pointer-events: none;
        background-color: #fff;
        text-align: center;
        border-radius: 5px;
        position: static;
        margin: 20px auto;
        display: inline-block;
        vertical-align: middle;
        -webkit-transform: scale(1);
        transform: scale(1);
        -webkit-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
        z-index: 10001;
        transition: opacity .2s, -webkit-transform .3s;
        transition: transform .3s, opacity .2s;
        transition: transform .3s, opacity .2s, -webkit-transform .3s
    }

    @media (max-width:500px) {
        .swal-modal {
            width: calc(100% - 20px)
        }
    }

    @-webkit-keyframes showSweetAlert {
        0% {
            -webkit-transform: scale(1);
            transform: scale(1)
        }

        1% {
            -webkit-transform: scale(.5);
            transform: scale(.5)
        }

        45% {
            -webkit-transform: scale(1.05);
            transform: scale(1.05)
        }

        80% {
            -webkit-transform: scale(.95);
            transform: scale(.95)
        }

        to {
            -webkit-transform: scale(1);
            transform: scale(1)
        }
    }

    @keyframes showSweetAlert {
        0% {
            -webkit-transform: scale(1);
            transform: scale(1)
        }

        1% {
            -webkit-transform: scale(.5);
            transform: scale(.5)
        }

        45% {
            -webkit-transform: scale(1.05);
            transform: scale(1.05)
        }

        80% {
            -webkit-transform: scale(.95);
            transform: scale(.95)
        }

        to {
            -webkit-transform: scale(1);
            transform: scale(1)
        }
    }
    </style>
    <!-- FORM CSS CODE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create New User</title>
    <link rel="shortcut icon" href="http://carsrental.great-site.net/en/images/favicon.ico">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="../dashboard_files/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Select2 -->
    <link rel="stylesheet" href="../dashboard_files/select2.min.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <!-- end -->
    <!-- Theme style -->
    <link rel="stylesheet" href="../dashboard_files/AdminLTE.min.css">


    <!-- Arabic RTL  -->





    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dashboard_files/_all-skins.min.css">
    <!--Toastr notification -->
    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">


    <!--Custom Css File-->
    <link rel="stylesheet" href="../dashboard_files/custom.css">


    <!-- Pace Loader -->
    <link rel="stylesheet" href="../dashboard_files/pace.min.css">
    <!-- Theme color finder -->
    <script type="text/javascript">
    var sidebar_collapse = (typeof(Storage) !== "undefined") ? localStorage.getItem('collapse') : 'skin-blue';
    </script>
    <!-- jQuery 2.2.3 -->
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>

    <!-- </copy> -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"
        integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <!-- include summernote css/js -->
    <link href="../dashboard_files/summernote.min.css" rel="stylesheet">

    <style type="text/css">
    #chart_container {
        min-width: 320px;
        max-width: 600px;
        margin: 0 auto;
    }

    @font-face {
        font-family: 'Poppins';
    }



    @font-face {
        font-family: 'Sukar';
        src: url('../Sukar-Regular.otf');
    }

    @font-face {
        font-family: 'Cairo';
    }

    @font-face {
        font-family: 'Almarai';
    }


    *,
    body,
    div,
    p,
    span,
    label,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: 'Poppins';
        font-weight: 500;
    }

    *,
    body,
    div,
    p,
    span,
    label,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    a {
        font-family: 'Poppins';
        font-weight: 500;
    }
    </style>

    <style type="text/css">
    .jqstooltip {
        position: absolute;
        left: 0px;
        top: 0px;
        visibility: hidden;
        background: rgb(0, 0, 0) transparent;
        background-color: rgba(0, 0, 0, 0.6);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
        -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
        color: white;
        font: 10px arial, san serif;
        text-align: left;
        white-space: nowrap;
        padding: 5px;
        border: 1px solid white;
        z-index: 10000;
    }

    .jqsfield {
        color: white;
        font: 10px arial, san serif;
        text-align: left;
    }
    </style>
</head>

<body class="skin-blue sidebar-mini  pace-done" style="height: auto;">
    <div class="pace  pace-inactive">
        <div class="pace-progress" data-progress-text="100%" data-progress="99"
            style="transform: translate3d(100%, 0px, 0px);">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>
    <div class="wrapper" style="height: auto;">

        <!-- Change the theme color if it is set -->
        <script type="text/javascript">
        if (sidebar_collapse == 'true') {
            $("body").addClass('sidebar-collapse');
        }
        </script>
        <!-- end -->

        <!-- Start Main Header -->
        <header class="main-header">

            <!-- Logo -->
            <a href="http://carsrental.great-site.net/en/admin/users" class="logo">
                <span class="logo-mini"><b>CN</b></span>
                <span class="logo-lg"><b>
                        Cars Rental
                    </b></span>
            </a>

            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="http://carsrental.great-site.net/en/admin/users#" class="sidebar-toggle"
                    data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">

                    <ul class="nav navbar-nav">
                        <!-- <li class="text-center hidden-xs" id="">

                        <!-- User Account Menu -->
                        <li class="dropdown tasks-menu">
                            <a href="http://carsrental.great-site.net/en/admin/users#"
                                class="dropdown-toggle text-right" data-toggle="dropdown" title="App Language">
                                <i class="fa-solid fa-earth-americas fa-lg"></i> &nbsp;
                                Language
                            </a>
                            <ul class="dropdown-menu" style="width: auto;height: auto;">
                                <li>
                                    <div class="slimScrollDiv"
                                        style="position: relative; overflow: hidden; width: auto; height: 200px;">
                                        <ul class="menu languages"
                                            style="overflow: hidden; width: 100%; height: 200px;">
                                            <li>
                                                <a rel="alternate" hreflang="en"
                                                    href="http://carsrental.great-site.net/en/admin/users">
                                                    English
                                                </a>
                                            </li>
                                            <li>
                                                <a rel="alternate" hreflang="ar"
                                                    href="http://carsrental.great-site.net/ar/admin/users">
                                                    العربية
                                                </a>
                                            </li>

                                        </ul>
                                        <div class="slimScrollBar"
                                            style="background: rgb(0, 0, 0); width: 3px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;">
                                        </div>
                                        <div class="slimScrollRail"
                                            style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;">
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </li>

                        <li class="dropdown messages-menu">
                            <a href="http://carsrental.great-site.net/en/admin/users#" class="dropdown-toggle"
                                data-toggle="dropdown">
                                <i class="fa-regular fa-comment fa-lg"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have <span style="font-size:16px"
                                        class="text-maroon"><b>0</b></span> comments</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <div class="slimScrollDiv"
                                        style="position: relative; overflow: hidden; width: auto; height: 200px;">
                                        <ul class="menu" style="overflow: hidden; width: 100%; height: 200px;">

                                            <li>
                                                <a href="http://carsrental.great-site.net/en/admin/users#">
                                                    <div class="pull-left">
                                                        <img src="../customer_files/default.png" class="img-circle"
                                                            alt="User Image">
                                                    </div>
                                                    <h4>
                                                        Not found !
                                                    </h4>
                                                </a>
                                            </li>

                                        </ul>
                                        <div class="slimScrollBar"
                                            style="background: rgb(0, 0, 0); width: 3px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;">
                                        </div>
                                        <div class="slimScrollRail"
                                            style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;">
                                        </div>
                                    </div>
                                </li>
                                <li class="footer"><a
                                        href="http://carsrental.great-site.net/en/admin/comments/pending">Show All</a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown messages-menu">
                            <a href="http://carsrental.great-site.net/en/admin/users#" class="dropdown-toggle"
                                data-toggle="dropdown">
                                <i class="fa-regular fa-envelope fa-lg"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have <span style="font-size:16px"
                                        class="text-maroon"><b>0</b></span> messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <div class="slimScrollDiv"
                                        style="position: relative; overflow: hidden; width: auto; height: 200px;">
                                        <ul class="menu" style="overflow: hidden; width: 100%; height: 200px;">

                                            <li>
                                                <a href="http://carsrental.great-site.net/en/admin/users#">
                                                    <div class="pull-left">
                                                        <img src="../customer_files/default(1).png" class="img-circle"
                                                            alt="User Image">
                                                    </div>
                                                    <h4>
                                                        Not found !
                                                    </h4>
                                                </a>
                                            </li>

                                        </ul>
                                        <div class="slimScrollBar"
                                            style="background: rgb(0, 0, 0); width: 3px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;">
                                        </div>
                                        <div class="slimScrollRail"
                                            style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;">
                                        </div>
                                    </div>
                                </li>
                                <li class="footer"><a
                                        href="http://carsrental.great-site.net/en/admin/pages/messages">Show All</a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown messages-menu">
                            <a href="http://carsrental.great-site.net/en/admin/users#" class="dropdown-toggle"
                                data-toggle="dropdown">
                                <i class="fa-regular fa-bell fa-lg"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have <span style="font-size:16px"
                                        class="text-maroon"><b>0</b></span> bookings</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <div class="slimScrollDiv"
                                        style="position: relative; overflow: hidden; width: auto; height: 200px;">
                                        <ul class="menu" style="overflow: hidden; width: 100%; height: 200px;">

                                            <li>
                                                <a href="http://carsrental.great-site.net/en/admin/users#">
                                                    <div class="pull-left">
                                                        <img src="../customer_files/default(2).png" class="img-circle"
                                                            alt="User Image">
                                                    </div>
                                                    <h4>
                                                        Not found !
                                                    </h4>
                                                </a>
                                            </li>

                                        </ul>
                                        <div class="slimScrollBar"
                                            style="background: rgb(0, 0, 0); width: 3px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;">
                                        </div>
                                        <div class="slimScrollRail"
                                            style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;">
                                        </div>
                                    </div>
                                </li>
                                <li class="footer"><a href="http://carsrental.great-site.net/en/admin/bookings">Show
                                        All</a></li>
                            </ul>
                        </li>


                        <li class="dropdown user user-menu">
                            <a href="http://carsrental.great-site.net/en/admin/users#" class="dropdown-toggle"
                                data-toggle="dropdown">
                                <img src="../customer_files/NdH2M6Ite5mdZiezbY82MplXuSvKX9Z2BD2L9XPF.png"
                                    class="user-image" alt="User Image">
                                <span class="hidden-xs">Test Test</span>
                            </a>

                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="../customer_files/NdH2M6Ite5mdZiezbY82MplXuSvKX9Z2BD2L9XPF.png"
                                        class="img-circle" alt="User Image">
                                    <p>
                                        Test Test <small>Year 2022</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="">
                                                <a href="http://carsrental.great-site.net/en/admin/profile"
                                                    style="margin-bottom:10px" class="btn btn-default btn-block "> <i
                                                        class="fa fa-user fa-fw"></i> Profile</a>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="">
                                                <a target="_blank" href="http://carsrental.great-site.net/"
                                                    style="margin-bottom:10px" class="btn btn-default btn-block "> <i
                                                        class="fa fa-eye fa-fw"></i> Visit Website</a>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="">
                                                <form action="http://carsrental.great-site.net/en/admin/logout"
                                                    method="POST">
                                                    @csrf
                                                    <button
                                                        type="submit" style="cursor:pointer"
                                                        class="btn btn-default btn-block confirm_logout"><i
                                                            class="fa fa-power-off fa-fw"></i> Logout</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>

            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar" style="height: auto;">
                <div class="user-panel">
                    <div class="pull-left">
                        <img src="../dashboard_files/NdH2M6Ite5mdZiezbY82MplXuSvKX9Z2BD2L9XPF.png"
                            style="width:40px;height:40px;border-radius:50%" class="" alt="User Image">
                    </div>
                    <div class="pull-left info" style="margin-top:10px">
                        <p> Test Test</p>
                    </div>
                </div>
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">

                    <!--<li class="header">MAIN NAVIGATION</li>-->
                    <li class="active">
                        <a href="http://carsrental.great-site.net/en/admin"><i class="fa fa-dashboard text-aqua"></i>
                            <span> Dashboard</span></a>
                    </li>

                    <!-- Admins -->
                    <li class=" users-active-li roles-list-active-li role-active-li treeview">
                        <a href="http://carsrental.great-site.net/en/users.html">
                            <i class="fa fa-star"></i> <span>Admins</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/admins">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Admins</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/admins/create">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Create New</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/admins/admingroups">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Admin Groups</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Users -->
                    <li class=" users-active-li roles-list-active-li role-active-li treeview">
                        <a href="http://carsrental.great-site.net/en/users.html">
                            <i class="fa fa-users"></i> <span>Customers</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/users">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Customers</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/users/create">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Create New</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Categories -->
                    <li class=" users-active-li roles-list-active-li role-active-li treeview">
                        <a href="http://carsrental.great-site.net/en/users.html">
                            <i class="fa fa-tags"></i> <span>Categories</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/categories/brands">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Brands</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/categories">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Categories</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/categories/create">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Create New</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Fuel Types -->
                    <li class=" users-active-li roles-list-active-li role-active-li treeview">
                        <a href="http://carsrental.great-site.net/en/users.html">
                            <i class="fa fa-tint"></i> <span>Fule Types</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/fueltypes">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Fule Types</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/fueltypes/create">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Create New</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Cars -->
                    <li class=" users-active-li roles-list-active-li role-active-li treeview">
                        <a href="http://carsrental.great-site.net/en/users.html">
                            <i class="fa fa-car"></i> <span>Cars</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/cars/attribute">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Car Attributes</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/cars">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Cars</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/cars/create">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Create New</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Drivers -->
                    <li class=" users-active-li roles-list-active-li role-active-li treeview">
                        <a href="http://carsrental.great-site.net/en/users.html">
                            <i class="fa fa-id-card"></i> <span>Drivers</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/drivers">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Drivers</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/drivers/create">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Create New</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Bookings -->
                    <li class=" users-active-li roles-list-active-li role-active-li treeview">
                        <a href="http://carsrental.great-site.net/en/users.html">
                            <i class="fa fa-check-circle"></i> <span>Bookings</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/bookings">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Bookings</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/bookings/pending">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Pending Bookings</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/bookings/processing">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Processing Bookings</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/bookings/accepted">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Accepted Bookings</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/bookings/cancelled">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Cancelled Bookings</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/bookings/create">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Create New</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- News -->
                    <li class=" users-active-li roles-list-active-li role-active-li treeview">
                        <a href="http://carsrental.great-site.net/en/users.html">
                            <i class="fa-solid fa-newspaper"></i> <span>News</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/news">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>News</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/news/create">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Create New</span>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <!-- Comments -->
                    <li class=" users-active-li roles-list-active-li role-active-li treeview">
                        <a href="http://carsrental.great-site.net/en/users.html">
                            <i class="fa fa-comments"></i> <span>Comments</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/comments/pending">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Pending Comments</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/comments/active">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Active Comments</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- News -->
                    <li class=" users-active-li roles-list-active-li role-active-li treeview">
                        <a href="http://carsrental.great-site.net/en/users.html">
                            <i class="fa fa-folder"></i> <span>Pages</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/pages/messages">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Messages</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/pages/about">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>About Us</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/pages/faq">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>FAQs</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/pages/service">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Services</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/pages/feature">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Features</span>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <!-- Settings -->
                    <li class=" users-active-li roles-list-active-li role-active-li treeview">
                        <a href="http://carsrental.great-site.net/en/users.html">
                            <i class="fa fa-cogs"></i> <span>Settings</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/settings/condition">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Terms &amp; Conditions</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="http://carsrental.great-site.net/en/admin/settings">
                                    <i class="fa fa-angle-double-right"></i>
                                    <span>Settings</span>
                                </a>
                            </li>

                        </ul>
                    </li>



                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper " style="min-height: 668px;">

            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1 class="dashboard-page-title">

                    <i class="fa fa-plus-circle"></i> Create Customers
                </h1>
            </section>
            <!-- Content Header (Page header) -->

            <!-- Main content -->
            <section class="content">


                <div class="box">

                    <div class="box-header with-border">
                        <h3 class="box-title">Enter Informations</h3>

                        <!-- Start Button  -->
                        <div class="button-page-header" style="margin-top:5px">
                            <a class="btn btn-block btn-warning" href="{{route('customers.page')}}">
                                <i class="fa fa-reply fa-fw fa-lg"></i> Back</a>
                        </div>

                    </div>

                    <div class="box-body">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                    
                        <form id="myForm" action="{{route('users.store')}}" method="POST"
                            class="userForm" enctype="multipart/form-data" novalidate="novalidate">
                            @csrf

                            <!-- Start Row  -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name"><b>Name</b></label>
                                        <input type="text" name="name" id="name" class="form-control " value="{{old('name')}}">
                                        @error('name')
                                            <span class="text-danger text-bold text-center">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- /.box-header -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name"><b>Email Address</b></label>
                                        <input type="email" name="email" id="email" class="form-control " value="{{old('email')}}">
                                        @error('email')
                                            <span class="text-danger text-bold text-center">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="phone"><b>Phone</b></label>
                                        <input type="number" name="phone" id="phone" class="form-control " value="{{old('phone')}}">
                                        @error('phone')
                                            <span class="text-danger text-bold text-center">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="password"><b>Password</b></label>
                                        <input type="password" name="password" value="{{old('password')}}" id="password" class="form-control ">
                                        @error('password')
                                            <span class="text-danger text-bold text-center">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="password_confirmation"><b>Confirm Password</b></label>
                                        <input type="password" name="password_confirmation" id="password_confirmation"
                                            class="form-control ">
                                            @error('password')
                                                <span class="text-danger text-bold text-center">{{ $message }}</span>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="address"><b>Address</b></label>
                                        <input type="text" name="address" id="address" class="form-control " value="{{old('address')}}">
                                        @error('address')
                                            <span class="text-danger text-bold text-center">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="address"><b>Post Code</b></label>
                                        <input type="text" name="postcode" id="postcode" class="form-control " value="{{old('postcode')}}">
                                        @error('postcode')
                                            <span class="text-danger text-bold text-center">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="gender"><b>Gender</b></label>
                                        <select name="gender" id="gender"
                                            class="form-control select2 select2-hidden-accessible" style="width:100%"
                                            tabindex="-1" aria-hidden="true">
                                            <option value="male" selected>Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                        @error('gender')
                                            <span class="text-danger text-bold text-center">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="text-center" style="margin-top:30px;margin-bottom:10px">
                                        <button type="submit" class="btn btn-primary btn-block"
                                            style="font-size:16px"><i class="fa fa-check fa-fw fa-lg"></i> Save</button>
                                    </div>
                                </div>

                            </div>
                            <!-- End Row  -->


                        </form>

                    </div>

                </div>


            </section>
            <!-- /.content -->

        </div>
        <!-- /.content-wrapper -->


        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>
                    Footer text for dashboard
                </b>
            </div>
            <strong> <i class="fa fa-heart fa-fw fa-lg" style="color:red"></i> &nbsp;&nbsp; Copyright © <span
                    style="color:#56a7ed">2023</span> All Rights Reserved</strong>
        </footer>

    </div>
    <!-- ./wrapper -->




    <!-- Bootstrap 3.3.6 -->
    {{-- <script src="../dashboard_files/bootstrap.min.js.download"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- end -->

    <!-- SlimScroll -->
    {{-- <script src="../dashboard_files/jquery.slimscroll.min.js.download"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>

    <!-- FastClick -->
    <script src="../dashboard_files/fastclick.js.download"></script>
    <!-- Select2 -->
    <script src="../dashboard_files/select2.full.min.js.download"></script>
    <!-- AdminLTE App -->
    <script>
    var AdminLTEOptions = {
        sidebarExpandOnHover: true,
        navbarMenuHeight: "200px", //The height of the inner menu
        animationSpeed: 250,
    };
    </script>
    <script src="../dashboard_files/app.js.download"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dashboard_files/demo.js.download"></script>
    <!-- page script -->
    <!--Toastr notification -->
    <script src="../dashboard_files/toastr.js.download"></script>

    <!--Toastr notification end-->

    <!-- Custom JS -->
    <script src="../dashboard_files/special_char_check.js.download"></script>
    <script src="../dashboard_files/custom.js.download"></script>

    <!-- Pace Loader -->
    <script src="../dashboard_files/pace.min.js.download"></script>
    <script type="text/javascript">
    $(document).ajaxStart(function() {
        Pace.restart();
    });
    </script>
    <!-- Sweet alert -->
    <script src="../dashboard_files/sweetalert.min.js.download"></script>
    <!-- iCheck -->

    <!-- Initialize Select2 Elements -->
    <script type="text/javascript">
    $(".select2").select2();
    </script>
    <!-- Initialize toggler -->
    <script type="text/javascript">
    $(document).ready(function() {
        $('[data-toggle="popover"]').popover();
    });
    </script>

    <script type="text/javascript">
    $(document).ready(function() {
        setTimeout(function() {
            $(".alert-dismissable").fadeOut(1000, function() {});
        }, 10000);
    });
    </script>
    <script type="text/javascript">
    function round_off(input = 0) {
        return input;
    }
    </script>

    <!-- Sparkline -->
    <script src="../dashboard_files/jquery.sparkline.min.js.download"></script>
    <!-- jvectormap -->
    <script src="../dashboard_files/jquery-jvectormap-1.2.2.min.js.download"></script>
    <script src="../dashboard_files/jquery-jvectormap-world-mill-en.js.download"></script>

    <!-- PIE CHART END -->



    <!-- validation -->
    <script src="../dashboard_files/jquery.validate.min.js.download"></script>
    <script src="../dashboard_files/additional-methods.min.js.download"></script>


    <!-- lobilist -->
    <!-- custom -->
    <!-- <script src="http://carsrental.great-site.net/js/custom.js"></script> -->
    <script src="../dashboard_files/sweetalert.min.js(1).download"></script>
    <script src="../dashboard_files/jquery.countTo.js.download"></script>

    <script src="../dashboard_files/jquery.dataTables.min.js.download"></script>
    <script src="../dashboard_files/dataTables.bootstrap4.min.js.download"></script>

    <script src="../dashboard_files/summernote.min.js.download"></script>

    <script>
    $(document).ready(function() {

        // Start Datatable ...
        $('.datatable').DataTable();


    });
    </script>
    <script src="../dashboard_files/main.js.download"></script>


</body>

</html>