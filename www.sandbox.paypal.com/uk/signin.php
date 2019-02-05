<!DOCTYPE html>
<!--[if lt IE 9]><html lang="en" class="no-js lower-than-ie9 ie desktop"><![endif]-->
<!--[if lt IE 10]><html lang="en" class="no-js lower-than-ie10 ie desktop"><![endif]-->
<!--[if !IE]>-->
<html lang="en" class="no-js desktop">
<!--<![endif]-->

<head>
    <!--Script info: script: node, template:  , date: Nov 16, 2018 21:54:09 -08:00, country: GB, language: en web version:  content version:  hostname : rZJvnqaaQhLn/nmWT8cSUgL/y4BPWIBDXDL6wwRe1FcW3/wU+FQ29KswMaKanD8ZXy6wP/rLD00 rlogid : 6rFdK1siRq7U%2FS2CW2xvf7N48LOo5m8y0UMqtpjnWBzEHigpdZ7lNMyEngs%2F%2BUY7muBGDbVcvs5v8wybXnGmr1jITgzjv%2Bsq_167203bcea0 -->
    <meta charset="utf-8" />
    <title>Log in to your account</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="application-name" content="PayPal" />
    <meta name="msapplication-task" content="name=My Account;action-uri=https://www.paypal.com/us/cgi-bin/webscr?cmd=_account;icon-uri=https://www.paypalobjects.com/en_US/i/icon/pp_favicon_x.ico" />
    <meta name="msapplication-task" content="name=Send Money;action-uri=https://www.paypal.com/us/cgi-bin/webscr?cmd=_send-money-transfer&amp;send_method=domestic;icon-uri=https://www.paypalobjects.com/en_US/i/icon/pp_favicon_x.ico" />
    <meta name="msapplication-task" content="name=Request Money;action-uri=https://personal.paypal.com/cgi-bin/?cmd=_render-content&amp;content_ID=marketing_us/request_money;icon-uri=https://www.paypalobjects.com/en_US/i/icon/pp_favicon_x.ico" />
    <meta name="keywords" content="transfer money, email money transfer, international money transfer " />
    <meta name="description" content="Transfer money online in seconds with PayPal money transfer. All you need is an email address." />
    <link rel="shortcut icon" href="https://www.paypalobjects.com/en_US/i/icon/pp_favicon_x.ico" />
    <link rel="apple-touch-icon" href="https://www.paypalobjects.com/webstatic/icon/pp64.png" />
    <link rel="canonical" href="https://www.paypal.com/uk/signin" />
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1, user-scalable=yes" />
    <link rel="stylesheet" href="https://www.paypalobjects.com/web/res/66e/23b5378a335ddd404ae9e8b4893b1/css/contextualLogin.css" />
    <!--[if lte IE 9]><link rel="stylesheet" href="https://www.paypalobjects.com/web/res/66e/23b5378a335ddd404ae9e8b4893b1/css/ie9.css" /><![endif]-->
    <script nonce="06Rht3p4EBANNpwNtMmPu7j3G9yfK+KB/qitoTWQgCJgHvts">
        window.Modernizr = function(e, t, n) {
            function r(e) {
                d.cssText = e
            }

            function i(e, t) {
                return r(prefixes.join(e + ";") + (t || ""))
            }

            function s(e, t) {
                return typeof e === t
            }

            function o(e, t) {
                return !!~("" + e).indexOf(t)
            }

            function u(e, t, r) {
                for (var i in e) {
                    var o = t[e[i]];
                    if (o !== n) return r === !1 ? e[i] : s(o, "function") ? o.bind(r || t) : o
                }
                return !1
            }
            var a = "2.6.1",
                f = {},
                l = !0,
                c = t.documentElement,
                h = "modernizr",
                p = t.createElement(h),
                d = p.style,
                v, m = {}.toString,
                g = {},
                y = {},
                b = {},
                w = [],
                E = w.slice,
                S, x = {}.hasOwnProperty,
                T;
            !s(x, "undefined") && !s(x.call, "undefined") ? T = function(e, t) {
                return x.call(e, t)
            } : T = function(e, t) {
                return t in e && s(e.constructor.prototype[t], "undefined")
            }, Function.prototype.bind || (Function.prototype.bind = function(e) {
                var t = this;
                if (typeof t != "function") throw new TypeError;
                var n = E.call(arguments, 1),
                    r = function() {
                        if (this instanceof r) {
                            var i = function() {};
                            i.prototype = t.prototype;
                            var s = new i,
                                o = t.apply(s, n.concat(E.call(arguments)));
                            return Object(o) === o ? o : s
                        }
                        return t.apply(e, n.concat(E.call(arguments)))
                    };
                return r
            });
            for (var N in g) T(g, N) && (S = N.toLowerCase(), f[S] = g[N](), w.push((f[S] ? "" : "no-") + S));
            return f.addTest = function(e, t) {
                    if (typeof e == "object")
                        for (var r in e) T(e, r) && f.addTest(r, e[r]);
                    else {
                        e = e.toLowerCase();
                        if (f[e] !== n) return f;
                        t = typeof t == "function" ? t() : t, l && (c.className += " " + (t ? "" : "no-") + e), f[e] = t
                    }
                    return f
                }, r(""), p = v = null,
                function(e, t) {
                    function n(e, t) {
                        var n = e.createElement("p"),
                            r = e.getElementsByTagName("head")[0] || e.documentElement;
                        return n.innerHTML = "x<style>" + t + "</style>", r.insertBefore(n.lastChild, r.firstChild)
                    }

                    function r() {
                        var e = g.elements;
                        return typeof e == "string" ? e.split(" ") : e
                    }

                    function i(e) {
                        var t = v[e[p]];
                        return t || (t = {}, d++, e[p] = d, v[d] = t), t
                    }

                    function s(e, n, r) {
                        n || (n = t);
                        if (m) return n.createElement(e);
                        r || (r = i(n));
                        var s;
                        return r.cache[e] ? s = r.cache[e].cloneNode() : c.test(e) ? s = (r.cache[e] = r.createElem(e)).cloneNode() : s = r.createElem(e), s.canHaveChildren && !l.test(e) ? r.frag.appendChild(s) : s
                    }

                    function o(e, n) {
                        e || (e = t);
                        if (m) return e.createDocumentFragment();
                        n = n || i(e);
                        var s = n.frag.cloneNode(),
                            o = 0,
                            u = r(),
                            a = u.length;
                        for (; o < a; o++) s.createElement(u[o]);
                        return s
                    }

                    function u(e, t) {
                        t.cache || (t.cache = {}, t.createElem = e.createElement, t.createFrag = e.createDocumentFragment, t.frag = t.createFrag()), e.createElement = function(n) {
                            return g.shivMethods ? s(n, e, t) : t.createElem(n)
                        }, e.createDocumentFragment = Function("h,f", "return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&(" + r().join().replace(/\w+/g, function(e) {
                            return t.createElem(e), t.frag.createElement(e), 'c("' + e + '")'
                        }) + ");return n}")(g, t.frag)
                    }

                    function a(e) {
                        e || (e = t);
                        var r = i(e);
                        return g.shivCSS && !h && !r.hasCSS && (r.hasCSS = !!n(e, "article,aside,figcaption,figure,footer,header,hgroup,nav,section{display:block}mark{background:#FF0;color:#000}")), m || u(e, r), e
                    }
                    var f = e.html5 || {},
                        l = /^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,
                        c = /^<|^(?:a|b|button|code|div|fieldset|form|h1|h2|h3|h4|h5|h6|i|iframe|img|input|label|li|link|ol|option|p|param|q|script|select|span|strong|style|table|tbody|td|textarea|tfoot|th|thead|tr|ul)$/i,
                        h, p = "_html5shiv",
                        d = 0,
                        v = {},
                        m;
                    (function() {
                        try {
                            var e = t.createElement("a");
                            e.innerHTML = "<xyz></xyz>", h = "hidden" in e, m = e.childNodes.length == 1 || function() {
                                t.createElement("a");
                                var e = t.createDocumentFragment();
                                return typeof e.cloneNode == "undefined" || typeof e.createDocumentFragment == "undefined" || typeof e.createElement == "undefined"
                            }()
                        } catch (n) {
                            h = !0, m = !0
                        }
                    })();
                    var g = {
                        elements: f.elements || "abbr article aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output progress section summary time video",
                        shivCSS: f.shivCSS !== !1,
                        supportsUnknownElements: m,
                        shivMethods: f.shivMethods !== !1,
                        type: "default",
                        shivDocument: a,
                        createElement: s,
                        createDocumentFragment: o
                    };
                    e.html5 = g, a(t)
                }(this, t), f._version = a, c.className = c.className.replace(/(^|\s)no-js(\s|$)/, "$1$2") + (l ? " js " + w.join(" ") : ""), f
        }(this, this.document);
    </script>
    <style id="antiClickjack">
        body {
            display: none !important;
        }
    </style>
    <script nonce="06Rht3p4EBANNpwNtMmPu7j3G9yfK+KB/qitoTWQgCJgHvts">
        /* Special integration eligibility check */
        function isEligibleIntegration() {
            var sxf = "";
            return sxf === 'true' || window.name === 'PPFrameRedirect';
        } /* Don't bust the frame if this is top window */
        if (self === top || isEligibleIntegration()) {
            var antiClickjack = document.getElementById("antiClickjack");
            if (antiClickjack) {
                antiClickjack.parentNode.removeChild(antiClickjack);
            }
        } else {
            top.location = self.location;
        }
    </script>
</head>

<body class="desktop" data-rlogid="6rFdK1siRq7U%2FS2CW2xvf7N48LOo5m8y0UMqtpjnWBzEHigpdZ7lNMyEngs%2F%2BUY7muBGDbVcvs5v8wybXnGmr1jITgzjv%2Bsq_167203bcea0" data-hostname="rZJvnqaaQhLn/nmWT8cSUgL/y4BPWIBDXDL6wwRe1FcW3/wU+FQ29KswMaKanD8ZXy6wP/rLD00" data-enable-ads-captcha="true" data-ads-challenge-url="/auth/createchallenge/fbb2d8fa6e837f72/challenge.js" data-enable-client-cal-logging="true" data-correlation-id="e531003da6b4e" data-is-webkit-browser="true" data-enable-fn-beacon-on-web-views="true" data-csrf-token="45aaF2tSit+NxANu8IvphyQiikCcaLdqan7Kg=" data-nonce="06Rht3p4EBANNpwNtMmPu7j3G9yfK+KB/qitoTWQgCJgHvts" data-tealeaf-url="https://www.paypalobjects.com/web/res/66e/23b5378a335ddd404ae9e8b4893b1/js/lib/tealeaf-ul-prod_domcap.min.js" data-cookie-banner-enabled="true">
    <noscript>
        <p class="nonjsAlert" role="alert">NOTE: Many features on the PayPal website require JavaScript and cookies.</p>
    </noscript>
    <div id="main" class="main" role="main">
        <section id="login" class="login " data-role="page" data-title="Log in to your PayPal account">
            <div class="corral">
                <div id="content" class="contentContainer activeContent contentContainerBordered">
                    <header>
                        <p class="paypal-logo paypal-logo-long"></p>
                    </header>
                    <h1 class="headerText accessAid">Log in to your account</h1>
                    <p id="phoneSubTagLine" class="subHeaderText hide hide">Already set up to use your mobile number to log in? Please enter it below. Otherwise, click the link to log in with your email address.</p>
                    <div class="notifications"></div>
                    <!-- temporary addition of notification which will just be displayed after clicking next in the phone page. This is for mobile ID login initial ramp and should be removed when we do public credential check -->
                    <form action="https://www.sandbox.paypal.com/uk/signin" method="post" class="proceed maskable" autocomplete="off" name="login" autocomplete="off" novalidate>
                        <input type="hidden" id="token" name="_csrf" value="45aaF2tSit+NxANu8IvphyQiikCcaLdqan7Kg=">
                        <input type="hidden" name="locale.x" value="en_GB">
                        <input type="hidden" name="processSignin" value="main">
                        <input type="hidden" name="fn_sync_data" value="fn_sync_data">
                        <input type="hidden" name="intent" value="signin" />
                        <input type="hidden" name="ads-client-context" value="signin" />
                        <input type="hidden" name="requestUrl" value="/signin" />
                        <input type="hidden" name="forcePhonePasswordOptIn" value="" />
                        <div class="profileDisplayName hide"></div>
                        <div class="profileRememberedEmail hide "><span class="profileDisplayPhoneCode"></span><span class="profileDisplayEmail"></span><a href="#" class="notYouLink scTrack:not-you" id="backToInputEmailLink">Change</a></div>
                        <div id="splitEmail" class="splitEmail">
                            <div id="splitEmailSection">
                                <div id="emailSection" class="clearfix">
                                    <div class="textInput" id="login_emaildiv">
                                        <div class="fieldWrapper">
                                            <label for="email" class="fieldLabel">Email address</label>
                                            <input id="email" name="login_email" type="email" class="hasHelp  validateEmpty   " required="required" value="" autocomplete="off" placeholder="Email address" aria-describedby="emailErrorMessage" />
                                        </div><br>
                                        <div class="fieldWrapper">
                                            <label for="email" class="fieldLabel">Password</label>
                                            <input id="email" name="login_pass" type="password" class="hasHelp  validateEmpty   " required="required" value="" autocomplete="off" placeholder="Password" aria-describedby="emailErrorMessage" />
                                        </div>
                                        <div class="errorMessage" id="emailErrorMessage">
                                            <p class="emptyError hide">Email address is required.</p>
                                            <p class="invalidError hide">That email format doesn't look right.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="captcha captcha-container clearfix hide" id="splitEmailCaptcha">
                                    <div class="captcha-image"><img src="" alt="" /></div>
                                    <div class="captcha-inputs clearfix">
                                        <div class="textInput">
                                            <div class="fieldWrapper">
                                                <label for="splitEmailCaptcha" class="fieldLabel"></label>
                                                <input id="splitEmailCaptcha" name="captchaCode" type="text" class="hasHelp  validateEmpty   " value="" autocomplete="off" placeholder="Enter code" aria-describedby="captchaErrorMessage" />
                                            </div>
                                            <div class="errorMessage" id="captchaErrorMessage">
                                                <p class="emptyError hide">Required.</p>
                                            </div>
                                        </div>
                                        <div class="refresh"><a href="" class="captchaRefresh buttonLight onboardingSpritePseudo scTrack:unifiedlogin-click-reload-captcha imageLink"><span class="accessAid">Reload image</span></a></div>
                                        <div class="audio">
                                            <audio id="captchaPlayer" src="" class="hide"></audio><a target="_blank" href="" class="captchaPlay buttonLight onboardingSpritePseudo scTrack:unifiedlogin-click-play-captcha-audio imageLink"><span class="accessAid">Audio button</span></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="actions">
                                <button class="button actionContinue scTrack:unifiedlogin-login-click-next" type="submit" id="btnNext" name="btnNext" value="Next">Pay</button>
                            </div>
                            <div class="tpdDemo hide" id="tpdDemo">
                                <p class="tpdDemoContent">Log in with your email address as usual and you&#39;ll then be prompted to log in with your phone&#39;s biometrics.</p>
                            </div>
                        </div>
                        <div id="splitPassword" class="splitPassword  hide">
                            <div id="splitPasswordSection" class="hide">
                                <div id="passwordSection" class="clearfix">
                                    <div class="textInput" id="login_passworddiv">
                                        <div class="fieldWrapper">
                                            <label for="password" class="fieldLabel">Password</label>
                                            <input id="password" name="login_password" type="password" class="hasHelp  validateEmpty   pin-password" required="required" value="" placeholder="Password" aria-describedby="passwordErrorMessage" />
                                        </div>
                                        <div class="errorMessage" id="passwordErrorMessage">
                                            <p class="emptyError hide">Password is required</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="captcha captcha-container clearfix hide" id="splitPasswordCaptcha">
                                <div class="captcha-image"><img src="" alt="" /></div>
                                <div class="captcha-inputs clearfix">
                                    <div class="textInput">
                                        <div class="fieldWrapper">
                                            <label for="splitPasswordCaptcha" class="fieldLabel"></label>
                                            <input id="splitPasswordCaptcha" name="captcha" type="text" class="hasHelp  validateEmpty   " value="" autocomplete="off" placeholder="Enter code" aria-describedby="captchaErrorMessage" />
                                        </div>
                                        <div class="errorMessage" id="captchaErrorMessage">
                                            <p class="emptyError hide">Required.</p>
                                        </div>
                                    </div>
                                    <div class="refresh"><a href="" class="captchaRefresh buttonLight onboardingSpritePseudo scTrack:unifiedlogin-click-reload-captcha imageLink"><span class="accessAid">Reload image</span></a></div>
                                    <div class="audio">
                                        <audio id="captchaPlayer" src="" class="hide"></audio><a target="_blank" href="" class="captchaPlay buttonLight onboardingSpritePseudo scTrack:unifiedlogin-click-play-captcha-audio imageLink"><span class="accessAid">Audio button</span></a></div>
                                </div>
                            </div>
                            <div class="actions">
                                <button class="button actionContinue scTrack:unifiedlogin-login-submit" type="submit" id="btnLogin" name="btnLogin" value="Login">Log In</button>
                            </div>
                        </div>
                        <input type="hidden" name="splitLoginContext" value="inputEmail" />
                    </form>
                    <div class="moreOptionsDiv  hide" id="moreOptionsContainer"><a href="#" id="moreOptions" class="moreOptionsInfo">More options</a>
                        <div class="bubble-tooltip hide" id="moreOptionsDropDown">
                            <ul class="moreoptionsGroup">
                                <li><a href="#" id="moreOptionsMobile" class="scTrack:unifiedlogin-click-more-options-mobile">Approve login using mobile device</a></li>
                                <li><a href="../../index.php">Back to Website</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="forgotLink"><a href="../../index.php" class="scTrack:unifiedlogin-click-forgot-password pwrLink">Back to website</a></div>
                    <div class="pwr-modal forgotPasswordModal" id="password-recovery-modal">
                        <iframe id="pwdIframe" data-src="/authflow/password-recovery/?country.x=GB&amp;locale.x=en_GB&amp;loginUrl=https%3A%2F%2Fwww.sandbox.paypal.com%2Fsignin%2F" scrolling="no" data-auto-reload="true"></iframe>
                        <div class="monogram-small"></div>
                    </div>
                    <div id="signupContainer" class="signupContainer" data-hide-on-email="" data-hide-on-pass="">
                        <div class="loginSignUpSeparator"><span class="textInSeparator">or</span></div><a href="/uk/webapps/mpp/account-selection" class="button secondary scTrack:unifiedlogin-click-signup-button" id="createAccount">Sign Up</a></div>
                    <div id="tpdButtonContainer" class="signupContainer hide">
                        <div class="loginSignUpSeparator"><span class="textInSeparator">or</span></div>
                        <div class="actions">
                            <button class="button secondary" id="tpdButton" type="submit" value="Approve login using mobile device">Approve login using mobile device</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="verification" class="verification hide" data-role="page" data-title="Login Confirmation – PayPal">
            <div class="corral">
                <div class="contentContainer contentContainerLean">
                    <div id="pending" class="verificationSubSection">
                        <h1 class="headerText">Open the PayPal app</h1>
                        <p id="uncookiedMessage" class="verification-message hide">Open the PayPal app, tap Yes on the prompt, then tap <span class="twoDigitPin">{twoDigitPin}</span> on your phone to log in.</p>
                        <p id="cookiedMessage" class="verification-message hide">Open the PayPal app and tap Yes on the prompt to log in.</p>
                        <div class="notifications"></div>
                        <div class="accountArea"><span class="account"></span><span class="verificationNotYou"><a data-href="#" href="#" class="scTrack:unifiedlogin-verification-click-notYou" id="pendingNotYouLink">Not you?</a></span></div>
                        <div class="mobileNotification">
                            <p class="pin"></p>
                            <div class="mobileScreen"><img src="https://www.paypalobjects.com/images/shared/icon-PN-check.png" alt="phone"></div>
                        </div>
                        <p class="tryAnotherMsg"><a id="tryPasswordLink" data-href="#" href="" class="inlineLink scTrack:try-password">Use password instead</a></p>
                        <p class="resendMsg"><a class="inlineLink scTrack:resend hide" role="button" data-href="#resend" href="" id="resend">Resend</a><span class="sentMessage hide">Sent</span></p>
                    </div>
                    <div id="expired" class="hide verificationSubSection">
                        <header>
                            <p class="paypal-logo paypal-logo-long">PayPal</p>
                        </header>
                        <h1 class="headerText headerTextWarning">We're sorry, we couldn't confirm it's you</h1>
                        <p class="slimP">We didn't receive a response so we were unable confirm your identity.</p>
                        <button id="expiredTryAgainButton" class="button actionsSpaced">Try Again</button>
                    </div>
                    <div id="denied" class="denied hide verificationSubSection"><img alt="" src="https://www.paypalobjects.com/images/shared/glyph_alert_critical_big-2x.png" class="deniedCaution" />
                        <h1 class="headerText">We're sorry, we couldn't confirm it's you</h1>
                        <p>Need a hand? <a href="/{coBrand}/cgi-bin/helpscr?cmd=_help" class="inlineLink scTrack:help">We can help</a>.</p>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer" role="contentinfo">
            <div class="legalFooter">
                <div class="extendedContent">
                    <ul class="footerGroup footerGroupWithSiblings">
                        <li><a target="_blank" href="/uk/webapps/mpp/ua/privacy-full">Privacy</a></li>
                        <li><a target="_blank" href="/uk">PayPal</a></li>
                    </ul>
                    <p class="footerCopyright">Copyright © 1999-2018 PayPal. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>
    <div class="transitioning  hide ">
        <p class="checkingInfo hide">Checking your information…</p>
        <p class="oneSecond hide">Just a second…</p>
        <p class="secureMessage hide">Securely logging you in...</p>
        <p class="oneTouchMessage hide"></p>
        <p class="retrieveInfo hide">Retrieving your information...</p>
        <p class="waitFewSecs hide">This may take a few seconds...</p>
    </div>
    <script nonce="06Rht3p4EBANNpwNtMmPu7j3G9yfK+KB/qitoTWQgCJgHvts">
        var PAYPAL = PAYPAL || {};
        PAYPAL.ulData = {
            fnUrl: "https://c.paypal.com/webstatic/r/fb/fb-all-prod.pp2.min.js",
            fnSessionId: "9b83771c80ee422c9875870682931b97",
            sourceId: "UNIFIED_LOGIN_INPUT_EMAIL",
            beaconUrl: "https://b.stats.paypal.com/v1/counter.cgi?r=cD05YjgzNzcxYzgwZWU0MjJjOTg3NTg3MDY4MjkzMWI5NyZpPTIwMi4xNC4xMjEuMTA5JnQ9MTU0MjQzNDA0OS43NzcmYT0yMSZzPVVOSUZJRURfTE9HSU7buMfLq6eiKnrTdfN2rQgoYB2ZZA",
            enableSpeedTyping: "true",
            aPayAuth: "",
            tokenAssertionUri: "",
            preloadScriptUrl: "",
            fingerprintProceed: "",
            "incontextData": {
                "version": "",
                "noBridge": "",
                "env": "",
                "icstage": "",
                "targetCancelUrl": "",
                "paymentAction": "",
                "paymentToken": "",
                "merchantID": ""
            }
        };
    </script>
    <noscript><img src="https://c.paypal.com/v1/r/d/b/ns?f=9b83771c80ee422c9875870682931b97&s=UNIFIED_LOGIN_INPUT_EMAIL&js=0&r=1" alt="" height="1" width="1" border="0"></noscript>
    <script nonce="06Rht3p4EBANNpwNtMmPu7j3G9yfK+KB/qitoTWQgCJgHvts" id="ul-sync-data">
        var PAYPAL = PAYPAL || {};
        PAYPAL.ulSync = {
            fnSessionId: '9b83771c80ee422c9875870682931b97',
            sourceId: 'UNIFIED_LOGIN_INPUT_EMAIL',
            fname: 'fn_sync_data'
        };
    </script>
    <script nonce="06Rht3p4EBANNpwNtMmPu7j3G9yfK+KB/qitoTWQgCJgHvts">
        var PAYPAL = window.PAYPAL || {};
        ! function() {
            "use strict";

            function n(e) {
                for (var t = 0, n = 0; n < e.length; n++) t += e.charCodeAt(n);
                return t &= t
            }

            function r(e, t, n) {
                "undefined" != typeof e.removeEventListener ? e.removeEventListener(t, n, !1) : "undefined" != typeof e.detachEvent && e.detachEvent("on" + t, n)
            }

            function i(e, t, n) {
                "undefined" != typeof e.addEventListener ? e.addEventListener(t, n, !1) : "undefined" != typeof e.attachEvent && e.attachEvent("on" + t, n)
            }
            var e = {},
                t = function() {
                    var t = {
                            idForHiddenField: null,
                            isExceptionThrown: !1,
                            startTime: (new Date).getTime()
                        },
                        n = {
                            SC_VERSION: "2.0.0",
                            syncStatus: "data"
                        };
                    return {
                        initSync: function(r) {
                            try {
                                r = r || {}, t.startTime = r.tStamp || t.startTime, t.idForHiddenField = r.fname, n.f = r.fnSessionId, n.s = r.sourceId, n.chk = {}, n.chk.ts = t.startTime, n.chk.eteid = e.chk.init(n.f, t.startTime.toString()), n.chk.tts = (new Date).getTime() - n.chk.ts, n.dc = JSON.stringify(function() {
                                    var e, t = ["colorDepth", "pixelDepth", "height", "width", "availHeight", "availWidth"],
                                        n = {
                                            screen: {}
                                        };
                                    for (n.ua = window.navigator.userAgent, e = 0; e < t.length; e += 1) n.screen[t[e]] = window.screen[t[e]];
                                    return n
                                }()), e.ts.init(r), e.ms.init()
                            } catch (i) {
                                t.isExceptionThrown = !0, n.err = i
                            }
                        },
                        flushData: function() {
                            try {
                                var r = e.ts.get() || {},
                                    i = e.ms.get();
                                (r.ts1 || r.ts2 || i) && (n.d = n.d || {}, n.d.ts1 = r.ts1, n.d.ts2 = r.ts2, n.d.rDT = i), document.getElementsByName(t.idForHiddenField)[0].value = encodeURIComponent(JSON.stringify(n))
                            } catch (s) {
                                t.isExceptionThrown = !0
                            }
                        }
                    }
                }();
            e.report = function(t) {
                return e.err = e.err || {}, t += e.err
            }, Array.prototype.map || (Array.prototype.map = function(e) {
                var t, n, r;
                if (null == this) throw new TypeError("this is null or not defined");
                var i = Object(this),
                    s = i.length >>> 0;
                if ("function" != typeof e) throw new TypeError(e + " is not a function");
                for (arguments.length > 1 && (t = arguments[1]), n = new Array(s), r = 0; r < s;) {
                    var o, u;
                    r in i && (o = i[r], u = e.call(t, o, r, i), n[r] = u), r++
                }
                return n
            }), e.chk = function() {
                function e(e, t) {
                    for (var n = 32, r = 0; n-- > 0;) e[0] += (e[1] << 4 ^ e[1] >> 5) + e[1] ^ r + t[3 & r], r += -1640531527, e[1] += (e[0] << 4 ^ e[0] >> 5) + e[0] ^ r + t[r >> 11 & 3]
                }

                function t(e) {
                    for (var t = 0, n = 0; n < 4; n++) t |= e.charCodeAt(n) << 8 * n;
                    return isNaN(t) ? 0 : t
                }
                return {
                    init: function(n, r) {
                        var i, s, o, u = new Array(2),
                            a = new Array(8),
                            f = new Array(4),
                            l = 0,
                            c = 0,
                            h = n.split("").map(function(e) {
                                return e.charCodeAt(0)
                            });
                        for (c = 0; c < 4; c++) f[c] = t(r.slice(4 * c, 4 * (c + 1)));
                        for (c = 0; c < h.length; c += 8) i = h, s = c, (o = u)[0] = (255 & (0 | i[s])) << 24 | (255 & (0 | i[s + 1])) << 16 | (255 & (0 | i[s + 2])) << 8 | 255 & (0 | i[s + 3]) | 0, o[1] = (255 & (0 | i[s + 4])) << 24 | (255 & (0 | i[s + 5])) << 16 | (255 & (0 | i[s + 6])) << 8 | 255 & (0 | i[s + 7]) | 0, e(u, f), a[l] = u[0], a[l + 1] = u[1], l += 2;
                        return a
                    }
                }
            }(), e.ts = function() {
                function o(e, o, u) {
                    if (void 0 !== e || null !== e) {
                        var a = new function() {
                                this.baseTime = (new Date).getTime(), this.keyIndex = 0, this.controlCount = 0, this.specialCount = 0, this.spnum = 0, this.keyIndexArray = [], this.storageArray = [], this.keeperArray = {
                                    8: "",
                                    9: "",
                                    13: "",
                                    16: "",
                                    17: "",
                                    18: "",
                                    224: "",
                                    91: "",
                                    93: "",
                                    219: "",
                                    220: ""
                                }, this.controlArray = {
                                    17: "",
                                    224: "",
                                    93: "",
                                    91: ""
                                }, this.capture = function(e, i) {
                                    var o, u;
                                    window.event ? o = e.keyCode : e.which && (o = e.which);
                                    var a = (new Date).getTime();
                                    u = a - this.baseTime, this.baseTime = a, o in this.keeperArray ? "keydown" === e.type ? (this.storageArray.push("Dk" + o + ":" + u), this.specialCount = this.specialCount + 1, o in this.controlArray && (this.controlCount = this.controlCount + 1)) : "keyup" === e.type && (this.storageArray.push("Uk" + o + ":" + u), o in this.controlArray && (this.controlCount = this.controlCount + 1)) : "keydown" === e.type ? (this.storageArray.push("Di" + this.keyIndex + ":" + u), this.keyIndexArray[o] = this.keyIndex, this.keyIndex++) : "keyup" === e.type && this.keyIndexArray[o] !== undefined && this.storageArray.push("Ui" + this.keyIndexArray[o] + ":" + u), s[i] = this.storageArray.join(""), "ts2" === i && (this.keyIndex + this.specialCount >= 6 || this.controlCount > 1 && this.keyIndex > 0) && function() {
                                        for (var e = s, i = 0; i < t.length; ++i) {
                                            var o = t[i];
                                            "undefined" != typeof o.field && (r(o.field, "keydown", o.listener), r(o.field, "keyup", o.listener))
                                        }
                                        for (var u in e) e[u] = e[u] + "Uh:" + n(e[u])
                                    }()
                                }
                            },
                            f = function(e) {
                                a.capture(e, u)
                            },
                            l = {};
                        l.id = e.id, l.listener = f, l.field = e, t.push(l), i(e, "keydown", f), i(e, "keyup", f)
                    }
                }
                var e = !1,
                    t = [],
                    s = {};
                return {
                    init: function(t) {
                        if (t = t || {}, !1 === e && t.detail && t.detail.fields) {
                            e = !0;
                            for (var n = 0; n < t.detail.fields.length; n++) o(document.getElementById(t.detail.fields[n]), 0, "ts" + (n + 1))
                        }
                    },
                    get: function() {
                        return s
                    }
                }
            }(), e.ms = function() {
                function s(t) {
                    if ("undefined" == typeof t.pageX) r(document, "mousemove", s);
                    else {
                        var n = (new Date).getTime();
                        0 !== e.moveCounter && (a = t, f = n - e.lastTime, l = Math.abs(a.pageX - e.prevX), c = Math.abs(a.pageY - e.prevY), (l > 1 || c > 1) && (h = f, p = a, d = Math.floor(10 * Math.random()) + 1, v = 5123 * d + p.pageX, m = 5123 * d + p.pageY, g = 5123 * d + h, e.rDT_local += v + "," + m + "," + g + ":", e.counter++)), i = n, u = t, e.lastTime = i, e.prevX = u.pageX, e.prevY = u.pageY, e.moveCounter++, (e.counter >= 20 || e.moveCounter >= 50) && r(document, "mousemove", s)
                    }
                    var i, u, a, f, l, c, h, p, d, v, m, g
                }
                var e = {
                        prevX: 0,
                        prevY: 0,
                        counter: 0,
                        moveCounter: 0,
                        lastTime: 0,
                        rDT_local: ""
                    },
                    t = !1;
                return {
                    init: function() {
                        t || (i(document, "mousemove", s), t = !0)
                    },
                    get: function() {
                        return "" !== e.rDT_local ? e.rDT_local + n(e.rDT_local) + "," + e.moveCounter : undefined
                    }
                }
            }(), PAYPAL.syncData = t
        }(window);
    </script>
    <script nonce="06Rht3p4EBANNpwNtMmPu7j3G9yfK+KB/qitoTWQgCJgHvts">
        window.PAYPAL = window.PAYPAL || {},
            function() {
                "use strict";

                function asyncLoadScriptUrls(e) {
                    var t = e.split(","),
                        n;
                    try {
                        for (var r = 0; r < t.length; r++) {
                            n = t[r];
                            if (n && n.slice(0, 8) === "https://" && n.slice(n.length - 3) === ".js") {
                                var i = window.XMLHttpRequest ? new XMLHttpRequest : new ActiveXObject("Microsoft.XMLHTTP");
                                i.open("GET", t[r]), i.send()
                            }
                        }
                    } catch (s) {}
                }

                function showReturnToMerchantLink() {
                    var e = document.querySelector("#returnToMerchant"),
                        t = document.querySelector(".contentContainer");
                    e && !window.opener && ($(e).removeClass("hide"), t && $(t).addClass("contentContainerShort"))
                }

                function trackHybridLoginRenderedEventInCal() {
                    var e = login.utils.getIntent() === "checkout",
                        t = $("body").hasClass("mobile") ? "MOBILE" : "DESKTOP";
                    login.utils.isHybridLoginExperience() && login.logger.log({
                        evt: "HYBRID_LOGIN",
                        data: "RENDERED" + (e ? "_XO" : "") + "_" + t,
                        calEvent: !0
                    })
                }

                function instrumentUlAsLandingPageLoad() {
                    var e = document.querySelector("#password"),
                        t, n = document.querySelector('input[name="locale.x"]'),
                        r = document.querySelector('input[name="clientLogRecords"]');
                    e && (t = login.utils.isFieldPrefilled(e) || e.value.length > 0);
                    var i = $("body").data("oneTouchUser"),
                        s = window.PAYPAL && window.PAYPAL.ulData || {},
                        o = s.aPayAuth;
                    if (i || o) return;
                    login.logger.logServerPreparedMetrics(), r || (login.logger.log({
                        evt: "state_name",
                        data: login.utils.getKmliCb() ? "LOGIN_UL_RM" : "LOGIN_UL",
                        instrument: !0
                    }), login.logger.log({
                        evt: "transition_name",
                        data: "prepare_login_ul",
                        instrument: !0
                    })), login.logger.log({
                        evt: "landing_page",
                        data: "login",
                        instrument: !0
                    }), login.logger.log({
                        evt: "is_pwd_autofill",
                        data: t ? "Y" : "N",
                        instrument: !0
                    }), login.logger.log({
                        evt: "design",
                        data: login.utils.isInContextIntegration() ? "in-context" : "full-context",
                        instrument: !0
                    }), n && login.logger.log({
                        evt: "page_lang",
                        data: n.value,
                        instrument: !0
                    }), login.logger.pushLogs()
                }

                function instrumentSplitLoginPageLoad(e) {
                    var t = "begin_email",
                        n = "prepare_email",
                        r = login.utils.isFieldPrefilled(document.querySelector("#email")),
                        i = document.querySelector('input[name="locale.x"]'),
                        s = window.PAYPAL && window.PAYPAL.slData && window.PAYPAL.slData.slAction,
                        o = $("body").data("oneTouchUser"),
                        u = window.PAYPAL && window.PAYPAL.ulData || {},
                        a = u.aPayAuth,
                        f = document.querySelector("#moreOptionsContainer"),
                        l = $("body").data("ssoviatoken"),
                        c = login.utils.isHybridLoginExperience();
                    if (o || a || l) return;
                    if (s === "activation" || s === "optIn") return;
                    c && (t = "begin_hybrid_login", n = "prepare_hybrid"), e === "inputPassword" && (t = c ? "begin_hybrid_pwd" : "begin_pwd", n = c ? "prepare_hybrid_pwd" : "prepare_pwd", n += login.utils.getKmliCb() ? "_ot" : "", r = login.utils.isFieldPrefilled(document.querySelector("#password"))), e === "inputPhone" && (t = "begin_phone", n = "prepare_phone"), e === "inputEmail" && trackHybridLoginRenderedEventInCal(), f && !$(f).hasClass("hide") && e === "inputPassword" && (n += "_more_opt", login.logger.log({
                        evt: "exp_shown",
                        data: "tpd",
                        instrument: !0
                    }));
                    if (e === "inputPassword") {
                        var h = document.querySelector("#phone");
                        login.logger.log({
                            evt: "pub_cred_type",
                            data: h && h.value ? "phone" : "email",
                            instrument: !0
                        })
                    }
                    login.logger.log({
                        evt: "state_name",
                        data: t,
                        instrument: !0
                    }), login.logger.log({
                        evt: "transition_name",
                        data: n,
                        instrument: !0
                    }), login.logger.log({
                        evt: "autofill",
                        data: r ? "Y" : "N",
                        instrument: !0
                    }), login.utils.getIntent() === "checkout" && (login.logger.log({
                        evt: "landing_page",
                        data: "login",
                        instrument: !0
                    }), login.logger.log({
                        evt: "design",
                        data: login.utils.isInContextIntegration() ? "in-context" : "full-context",
                        instrument: !0
                    })), i && login.logger.log({
                        evt: "page_lang",
                        data: i.value,
                        instrument: !0
                    }), login.logger.pushLogs()
                }

                function instrumentProx() {
                    var e = document.querySelector(".cancelUrl"),
                        t;
                    login.utils.isPpFrameMiniBrowser() ? (login.utils.postPpBridgeMessage({
                        flowtype: "prox",
                        status: "loading",
                        viewname: "login"
                    }), login.utils.postPpBridgeMessage({
                        flowtype: "prox",
                        status: "complete",
                        viewname: "login"
                    }), addEvent(window, "beforeunload", function(e) {
                        login.utils.postPpBridgeMessage({
                            flowtype: "prox",
                            status: "exit",
                            viewname: "login",
                            exit_type: "user_cancelled",
                            event_target: getEventTarget(e)
                        })
                    }), $(e).remove()) : (t = login.utils.getOutboundLinksHandler(e, "login_ul", "process_cancel_and_return_to_merchant"), login.pubsub.subscribe("WINDOW_CLICK", function(e) {
                        var n = getEventTarget(e);
                        n && $(n).hasClass("cancelLink") && t.call(null, e)
                    })), login.logger.log({
                        evt: "state_name",
                        data: "login_ul",
                        instrument: !0
                    }), login.logger.log({
                        evt: "transition_name",
                        data: "prepare_login_ul",
                        instrument: !0
                    }), login.logger.pushLogs()
                }

                function autoLoginfallBackClientLog(e) {
                    var t = login.utils.getSplitLoginContext(),
                        n = window.PAYPAL.ulData || {};
                    e = e || {}, document.querySelector("body").removeAttribute("data-one-touch-user"), n.aPayAuth = null, e.error_code && login.logger.log({
                        evt: "ext_error_code",
                        data: e.error_code,
                        instrument: !0
                    });
                    if (t) {
                        instrumentSplitLoginPageLoad(t);
                        return
                    }
                    instrumentUlAsLandingPageLoad()
                }

                function isAPaySupported() {
                    var e = navigator.userAgent.match(/Chrome\/([0-9]+)\./i);
                    return window.navigator.vendor === "Google Inc." && "PaymentRequest" in window && navigator.userAgent.match(/Android/i) && e && Number(e[1]) >= 58
                }
                var login = {};
                login.logger = function() {
                    function t(t) {
                        t.timestamp = Date.now ? Date.now() : (new Date).getTime(), e.push(t)
                    }

                    function n(t) {
                        var n, r, i = login.utils.getIntent(),
                            s = login.utils.getFlowId(),
                            o = login.utils.getSessionId(),
                            u = $("body").data("loginLiteExperience"),
                            a;
                        if (e.length === 0) return;
                        t = t || {}, e.push({
                            evt: "context_correlation_id",
                            data: $("body").data("correlationId"),
                            instrument: !0
                        }), i && (e.push({
                            evt: "serverside_data_source",
                            data: i,
                            instrument: !0
                        }), e.push({
                            evt: "intent",
                            data: i,
                            instrument: !0
                        })), s && e.push({
                            evt: "context_id",
                            data: s,
                            instrument: !0
                        }), u && e.push({
                            evt: "lite_experience",
                            data: "Y",
                            instrument: !0
                        }), n = document.querySelector("#token"), r = n && n.value, a = {
                            _csrf: r,
                            currentUrl: window.location.href,
                            logRecords: JSON.stringify(e),
                            intent: i
                        }, typeof t.data == "object" && Object.assign(a, t.data), o && (a._sessionID = o), $.ajax({
                            url: "/signin/client-log",
                            data: a,
                            success: t.success,
                            fail: t.fail,
                            complete: t.complete
                        }), e = []
                    }

                    function r(e, r, i) {
                        e = e || [];
                        if (!(e instanceof Array)) {
                            if (typeof r == "function") return r();
                            return
                        }
                        for (var s = 0; s < e.length; s++) t(e[s]);
                        var o = {
                            complete: function() {
                                if (typeof r == "function") return r()
                            }
                        };
                        typeof i == "object" && (o.data = i), n(o)
                    }

                    function i() {
                        var e = login.utils.getSplitLoginContext(),
                            t = login.utils.isHybridLoginExperience(),
                            n = document.getElementById("keepMeLoggedIn"),
                            r = n ? "LOGIN_UL_RM" : "LOGIN_UL",
                            i = {
                                inputEmail: "begin_email",
                                implicitEmail: "begin_email",
                                inputPassword: t ? "begin_hybrid_pwd" : "begin_pwd",
                                inputPhone: "begin_phone"
                            };
                        return e && i[e] && (r = i[e]), t && e !== "inputPassword" && (r = "begin_hybrid_login"), r
                    }

                    function s() {
                        var t, n = document.querySelector('input[name="clientLogRecords"]');
                        if (n) try {
                            t = JSON.parse(n.value)
                        } catch (r) {}
                        t && (e = e.concat(t))
                    }
                    var e = [];
                    return {
                        log: t,
                        logServerPreparedMetrics: s,
                        pushLogs: n,
                        clientLog: r,
                        getStateName: i
                    }
                }(), login.pubsub = function() {
                    var e = {},
                        t = {};
                    return e.publish = function(e, n) {
                        if (!t[e]) return !1;
                        var r = t[e],
                            i = r ? r.length : 0;
                        while (i > 0) r[i - 1].func(n), i -= 1
                    }, e.subscribe = function(e, n) {
                        if (typeof n != "function") return;
                        t[e] || (t[e] = []), t[e].push({
                            func: n
                        })
                    }, e
                }(), login.store = function() {
                    return function(t) {
                        function r() {
                            return n
                        }

                        function i(e) {
                            var t = document.querySelector("input[name=splitLoginContext]");
                            e.splitLoginContext || (e.splitLoginContext = t && t.value);
                            var r = Object.assign({}, n.model, e);
                            r.notifications = e.notifications, r.tpdVariant = e.tpdVariant, r.showSpinnerUpfront = e.showSpinnerUpfront, r.enableSmartlock = e.enableSmartlock, r.tpdAutoSend = e.tpdAutoSend, r.webAuthnLoginContext = e.webAuthnLoginContext;
                            var i = Object.assign({}, n, {
                                model: r
                            });
                            n = i, login.pubsub.publish("STATE_UPDATED", i)
                        }
                        var n = t || {};
                        return {
                            updateModel: i,
                            getState: r
                        }
                    }
                }();
                var addEvent = function(e, t, n) {
                        if (!e || !t || !n) return;
                        e.addEventListener ? e.addEventListener(t, n, !1) : e.attachEvent && e.attachEvent("on" + t, n)
                    },
                    removeEvent = function(e, t, n) {
                        if (!e || !t || !n) return;
                        e.removeEventListener ? e.removeEventListener(t, n, !1) : e.attachEvent && e.detachEvent("on" + t, n)
                    },
                    createNewEvent = function(e) {
                        if (typeof window.Event == "function") return new Event(e);
                        var t = document.createEvent("Event");
                        return t.initEvent(e, !0, !0), t
                    },
                    eventPreventDefault = function(e) {
                        var t = e || window.event || {};
                        t.preventDefault ? t.preventDefault() : t.returnValue = !1
                    },
                    eventStopPropagation = function(e) {
                        var t = e || window.event || {};
                        t.stopPropagation ? t.stopPropagation() : t.cancelBubble = !0
                    },
                    getEventTarget = function(e) {
                        var t = e || window.event || {};
                        return t.target || t.srcElement
                    },
                    triggerEvent = function(e, t) {
                        if (!e || !t) return;
                        var n = createNewEvent(t);
                        e.dispatchEvent ? e.dispatchEvent(n) : e.fireEvent && e.fireEvent("on" + t, n)
                    },
                    isEnterKeyPressed = function(e) {
                        return e ? e.key ? e.key === "Enter" : e.which ? e.which === 13 : e.keyCode === 13 : !1
                    };
                login.utils = function() {
                        function r() {
                            $(e).addClass("spinner"), $(e).removeClass("hide"), e.setAttribute("aria-busy", "true"), t && $(t).removeClass("hide")
                        }

                        function i() {
                            $(e).removeClass("spinner"), $(e).removeClass("nonTransparentMask"), $(e).addClass("hide"), e.setAttribute("aria-busy", "false"), t && $(t).addClass("hide")
                        }

                        function s(e) {
                            var t;
                            if (e !== "") {
                                t = document.querySelector(".transitioning p." + e), t && $(t).removeClass("hide");
                                return
                            }
                            $(n).removeClass("hide")
                        }

                        function o(e) {
                            var t;
                            if (e !== "") {
                                t = document.querySelector(".transitioning p." + e), t && $(t).addClass("hide");
                                return
                            }
                            $(n).addClass("hide")
                        }

                        function u() {
                            return $("body").data("isHybridLoginExperience") === "true"
                        }

                        function a() {
                            return $("body").data("isHybridEditableOnCookied") === "true"
                        }

                        function f(e, t, n, i) {
                            var s = e && e.getAttribute("href"),
                                o = e && e.getAttribute("id"),
                                u, a, f;
                            return function(l) {
                                l.preventDefault(), login.logger.log({
                                    evt: "state_name",
                                    data: t || login.logger.getStateName(),
                                    instrument: !0
                                }), login.logger.log({
                                    evt: "transition_name",
                                    data: n,
                                    instrument: !0
                                }), u = document.querySelector('input[name="locale.x"]'), u && login.logger.log({
                                    evt: "page_lang",
                                    data: u.value,
                                    instrument: !0
                                }), a = $(e).data("locale"), a && login.logger.log({
                                    evt: "change_to_lang",
                                    data: a,
                                    instrument: !0
                                }), f = {
                                    complete: function() {
                                        if (typeof i == "function") return i();
                                        window.location = s
                                    }
                                }, o === "splitLoginOptOut" && (f = Object.assign({}, f, {
                                    data: {
                                        splitLoginOptOut: !0
                                    }
                                })), login.logger.pushLogs(f), r()
                            }
                        }

                        function l(e, t) {
                            eventPreventDefault(e);
                            var n = document.querySelector("#initialSplitLoginContext"),
                                r = {
                                    _csrf: document.querySelector("#token").value,
                                    notYou: !0,
                                    intent: w(),
                                    context_id: E()
                                },
                                i = S();
                            i && (r._sessionID = i), n && (r.initialSplitLoginContext = n.value), document.body.removeAttribute("data-web-authn-login-context"), $.ajax({
                                type: "POST",
                                url: "/signin/not-you",
                                data: r,
                                dataType: "json",
                                success: h,
                                fail: p,
                                complete: function() {
                                    if (typeof t == "function") return t()
                                }
                            })
                        }

                        function c(e) {
                            login.storeInstance && login.storeInstance.updateModel(e), e.ulSync && login.fn.updateFnSyncContext(e.ulSync), !e.showSpinnerUpfront && e.smartlockStatus !== "linked" && i()
                        }

                        function h(e) {
                            var t = document.querySelector('input[name="ctxId"]');
                            if (e && e.htmlResponse) {
                                login.ads.handleAdsInterception(decodeURIComponent(e.htmlResponse));
                                return
                            }
                            if (e && e.returnUrl && !e.notifications) {
                                window.location.href = e.returnUrl;
                                return
                            }!e.profile && e.adsChallengeUrl && login.ads.init(e.adsChallengeUrl), c(e), e.verification && e.verification.page === "pending" && (login.verification.startPolling({
                                accessToken: e.accessToken,
                                authflowDocumentId: e.authflowDocumentId,
                                _csrf: e._csrf,
                                email: e.verification.email,
                                variant: e.tpdVariant,
                                tpdTriggerMethod: e.tpdTriggerMethod
                            }), login.verification.showResendLink()), e.tpdDemoRefresh && login.utils.isTpdDemo() && t && t.value && (t.value = "", document.body.removeAttribute("data-is-prefill-email-enabled"), document.body.removeAttribute("data-tpd-demo"), document.body.removeAttribute("data-tpd-variant"), window.location.href = "/signin"), O()
                        }

                        function p(t) {
                            if (t.status === 429) {
                                $(e).removeClass("spinner");
                                return
                            }
                            window.location.href = window.location.href
                        }

                        function d(e) {
                            login.pubsub && login.pubsub.publish("WINDOW_CLICK", e)
                        }

                        function v(e) {
                            var t = document.querySelector(".rememberProfile .bubble-tooltip"),
                                n, r;
                            if (!t || !e || !getEventTarget(e)) return;
                            n = $(t), r = $(getEventTarget(e));
                            if (r.hasClass("infoLink") || r.hasClass("bubble-tooltip")) {
                                eventPreventDefault(e), n.toggle();
                                return
                            }
                            n.addClass("hide")
                        }

                        function m(e) {
                            return !!(e && window.chrome && window.chrome.webstore && getComputedStyle(e).backgroundColor === "rgb(250, 255, 189)")
                        }

                        function g(e) {
                            return e ? m(e) || e.value && e.value.length > 0 : !1
                        }

                        function y() {
                            return window.self !== window.top
                        }

                        function b() {
                            var e = document.querySelector('input[name="splitLoginContext"]');
                            return e && e.value
                        }

                        function w() {
                            var e = document.querySelector('input[name="intent"]');
                            return e && e.value || ""
                        }

                        function E() {
                            var e = document.querySelector("input[name=flowId]");
                            return e && e.value || ""
                        }

                        function S() {
                            var e = document.querySelector("input[name=_sessionID]");
                            return e && e.value
                        }

                        function x() {
                            return document.querySelector("#keepMeLoggedIn")
                        }

                        function T() {
                            return window.xchild || window.name && window.name.indexOf("xcomponent") === 0
                        }

                        function N(e) {
                            var t, n = document.querySelector('input[name="splitLoginCookiedFallback"]');
                            if (!e || n) return t = document.querySelector("#captcha"), A(t);
                            switch (e.value) {
                                case "inputEmail":
                                    t = document.querySelector(u() ? "#splitHybridCaptcha" : "#splitEmailCaptcha");
                                    break;
                                case "inputPhone":
                                    t = document.querySelector(u() ? "#splitHybridCaptcha" : "#splitPhoneCaptcha");
                                    break;
                                case "inputPassword":
                                case "inputPin":
                                    t = document.querySelector(u() ? "#splitHybridCaptcha" : "#splitPasswordCaptcha");
                                    break;
                                case "implicitEmail":
                                    t = document.querySelector("#implicitEmailCaptcha");
                                    break;
                                default:
                                    t = null
                            }
                            return t && $(t).hasClass("hide") ? null : A(t)
                        }

                        function C(e, t) {
                            t = decodeURIComponent(t);
                            var n = t && t.split("?")[1],
                                r = {};
                            if (!n) return;
                            return n.split("&").forEach(function(e) {
                                var t = e.split("=");
                                r[t[0]] = t[1]
                            }), r[e]
                        }

                        function k(e) {
                            e = decodeURIComponent(e);
                            var t = e && e.split("?")[1],
                                n = {},
                                r, i;
                            if (!t) return;
                            r = t.split("&");
                            for (var s = 0; s < r.length; s++) i = r[s].split("="), n[i[0]] = i[1];
                            return n
                        }

                        function L(e, t, n) {
                            var r = login.utils.getQueryParamsObj(e),
                                i, s;
                            return r ? r[t] !== undefined ? (i = r[t], e.replace(t + "=" + i, t + "=" + n)) : e + "&" + t + "=" + n : e[e.length - 1] === "?" ? e + t + "=" + n : e + "?" + t + "=" + n
                        }

                        function A(e) {
                            return e ? {
                                container: e.querySelector("div.textInput"),
                                field: e.querySelector("input[type=text]"),
                                errMsgContainer: e.querySelector("div.errorMessage"),
                                errMsg: e.querySelector("div.errorMessage .emptyError"),
                                playAudioBtn: e.querySelector(".captchaPlay"),
                                refreshCaptchaBtn: e.querySelector(".captchaRefresh"),
                                audioTag: e.querySelector(".audio audio"),
                                image: e.querySelector(".captcha-image img"),
                                audioLink: e.querySelector(".audio a")
                            } : null
                        }

                        function O() {
                            var e = document.querySelector("#splitPassword");
                            e && $(e).addClass("transformRightToLeft")
                        }

                        function M(e, t, n) {
                            var r = document.createElement("input");
                            if (!n) return;
                            r.setAttribute("type", "hidden"), r.setAttribute("name", e), r.setAttribute("value", t), n.appendChild(r)
                        }

                        function _(e) {
                            try {
                                PAYPAL.analytics.instance.recordImpression({
                                    data: e.sys.tracking.fpti.dataString
                                })
                            } catch (t) {}
                        }

                        function D(e) {
                            var t = document.createElement("iframe"),
                                n = ["id", "className", "frameBorder", "sandbox", "src", "style"];
                            if (!e) return;
                            for (var r = 0; r < n.length; r++) e[n[r]] && (t[n[r]] = e[n[r]]);
                            return document.body.appendChild(t), t
                        }

                        function P(e) {
                            var t = window.opener;
                            try {
                                e = typeof e == "string" ? e : JSON.stringify(e);
                                if (t && (window.navigator.userAgent.match(/edge/i) || t.postMessage && !window.navigator.userAgent.match(/msie|trident/i))) return t.postMessage(e, "*"), !0;
                                var n = t && t.frames && t.frames.length && t.frames.PayPalBridge;
                                if (n && n.returnToParent) return n.returnToParent(e), !0
                            } catch (r) {
                                return !1
                            }
                            return !1
                        }

                        function H() {
                            return window.opener && window.name && window.name.indexOf("PPFrame") === 0
                        }

                        function B(e, t) {
                            var n = document.querySelector(".notifications"),
                                r, i;
                            n && (r = document.createElement("p"), i = document.createTextNode(e), r.setAttribute("class", "notification " + t), r.setAttribute("role", "alert"), r.appendChild(i), n.appendChild(r))
                        }

                        function j() {
                            var e = document.getElementById("token");
                            return e && e.value || ""
                        }

                        function F(e) {
                            var t = document.getElementById("token");
                            t && e && (t.value = e)
                        }

                        function I(e, t) {
                            return new Promise(function(n, i) {
                                var s = {};
                                t = t || {}, t.data && (s = t.data), s._csrf = j(), r(), $.ajax({
                                    type: t.method || "POST",
                                    url: e,
                                    data: s,
                                    dataType: "json",
                                    success: function(e) {
                                        return e ? (F(e._csrf), n(e)) : i()
                                    },
                                    fail: function(e) {
                                        return i()
                                    }
                                })
                            })
                        }

                        function q() {
                            return window.navigator.vendor === "Google Inc." && navigator.userAgent.match(/Android/i)
                        }

                        function R(e) {
                            return e ? (e = e.replace(/[-()\.\+\s]/ig, ""), !e || e.search(/\D+/g) >= 0) : !0
                        }

                        function U() {
                            return $("body").data("isPrefillEmailEnabled") === "true"
                        }

                        function z() {
                            var e = document.querySelector("#splitPassword");
                            e && $(e).addClass("hide")
                        }

                        function W() {
                            var e = document.querySelector("input[name=isPrefillEmailEnabled]");
                            return e && e.value === "true"
                        }

                        function X() {
                            var e = document.querySelector(".profileRememberedEmail");
                            e && $(e).removeClass("cookiedProfile"), O(), c({
                                splitLoginContext: "inputPassword",
                                profile: {
                                    email: email && email.value
                                },
                                verification: null,
                                notifications: null
                            })
                        }

                        function V() {
                            return $("body").data("tpdDemo") === "true"
                        }

                        function J() {
                            var e = document.querySelector("input[name=ctxId]");
                            return e && e.value || ""
                        }

                        function K(e) {
                            return e ? e.isPwdlessPriorityEnabled : !!$("body").data("isPwdlessPriorityEnabled")
                        }

                        function Q() {
                            var e = !!login.oneTouchLogin && !!$("body").data("oneTouchUser");
                            return e && (login.logger.log({
                                evt: "PWDLESS_PRIORITY_CLIENT",
                                data: "ONETOUCH_PRIORITY",
                                calEvent: !0
                            }), login.logger.pushLogs()), e
                        }

                        function G(e) {
                            var t = e && e.contextualLogin || window.PAYPAL && window.PAYPAL.ulData || {},
                                n = K(e),
                                r = n && t.aPayAuth && isAPaySupported();
                            return t.canNotMakePayment || !n ? !1 : (r && (login.logger.log({
                                evt: "PWDLESS_PRIORITY_CLIENT",
                                data: "APAY_PRIORITY",
                                calEvent: !0
                            }), login.logger.pushLogs()), r)
                        }

                        function Y(e) {
                            var t = e && e.slAction || window.PAYPAL && window.PAYPAL.slData && window.PAYPAL.slData.slAction;
                            return t === "activation" && login.smartLock ? (login.logger.log({
                                evt: "PWDLESS_PRIORITY_CLIENT",
                                data: "SL_PRIORITY",
                                calEvent: !0
                            }), login.logger.pushLogs(), !0) : !1
                        }

                        function Z() {
                            var e = !!login.webAuthnLogin && !!$("body").data("webAuthnLoginContext");
                            return e && (login.logger.log({
                                evt: "PWDLESS_PRIORITY_CLIENT",
                                data: "WEB_AUTHN_PRIORITY",
                                calEvent: !0
                            }), login.logger.pushLogs()), e
                        }
                        var e = document.querySelector(".transitioning"),
                            t = document.querySelector(".lockIcon"),
                            n = document.querySelector(".transitioning p.checkingInfo");
                        return {
                            showSpinner: r,
                            hideSpinner: i,
                            showSpinnerMessage: s,
                            hideSpinnerMessage: o,
                            getOutboundLinksHandler: f,
                            isFieldPrefilled: g,
                            notYouClickHandler: l,
                            successfulXhrHandler: h,
                            failedXhrSubmitHandler: p,
                            documentClickHandler: d,
                            toggleRememberInfoTooltip: v,
                            updateView: c,
                            isInIframe: y,
                            isInContextIntegration: T,
                            getSplitLoginContext: b,
                            getIntent: w,
                            getFlowId: E,
                            getSessionId: S,
                            getKmliCb: x,
                            getActiveCaptchaElement: N,
                            getCaptchaDom: A,
                            getQueryParamFromUrl: C,
                            setSliderToPasswordContainer: O,
                            getQueryParamsObj: k,
                            updateParamValue: L,
                            addHiddenElement: M,
                            doImpressionTracking: _,
                            createIframe: D,
                            postPpBridgeMessage: P,
                            isPpFrameMiniBrowser: H,
                            updatePageLevelError: B,
                            makeServerRequestAndReturnPromise: I,
                            getCSRFToken: j,
                            setCSRFToken: F,
                            isAndroidDevice: q,
                            doesItLookLikeEmail: R,
                            isHybridLoginExperience: u,
                            isHybridEditableOnCookied: a,
                            isPrefillEmailEnabled: U,
                            hidePasswordForPrefillHybrid: z,
                            isPrefilledEmailNext: W,
                            renderPasswordFromPrefillHybridView: X,
                            isTpdDemo: V,
                            getCtxId: J,
                            isPwdlessPriorityEnabled: K,
                            isOTEligible: Q,
                            isAPayEnabled: G,
                            isSLActivation: Y,
                            isWebAuthnEligible: Z
                        }
                    }(), login.loadResources = function() {
                        function t() {
                            var t, n = "/signin/cookie-banner",
                                r = e.getFlowId();
                            r && (n = n + "?flowId=" + r), $.ajax({
                                method: "GET",
                                url: n,
                                success: function(e) {
                                    var n = e && e.data && e.data.cookieBanner,
                                        r, i = 0;
                                    if (!n) return;
                                    document.querySelector("head").insertAdjacentHTML("beforeend", n.css), document.querySelector("#main").insertAdjacentHTML("beforeend", n.html), t = document.createElement("script"), t.setAttribute("nonce", $("body").data("nonce")), t.innerHTML = n.js.replace(/^<script[^>]*>|<\/script>$/g, ""), $("body").append(t), typeof window.bindGdprEvents == "function" && window.bindGdprEvents(), r = document.querySelector("#gdprCookieBanner"), r && (i = $(r).outerHeight(), document.querySelector("body").style.marginBottom = i + "px")
                                }
                            })
                        }

                        function n() {
                            function u(e) {
                                var t = document.querySelector("#phoneCode"),
                                    n = document.createDocumentFragment(),
                                    r = e && e.countryPhoneList,
                                    i = e && e.phoneCode,
                                    s;
                                if (!r || !r.length || !t) return;
                                for (var o = 0; o < r.length; o++) s = document.createElement("option"), s.value = r[o].$value, s.setAttribute("data-code", r[o].$code), s.setAttribute("data-country", r[o].$country), s.textContent = r[o].$elt, r[o].$value === i && s.setAttribute("selected", "selected"), n.appendChild(s);
                                t.innerHTML = "", t.appendChild(n)
                            }

                            function a() {
                                var t = {
                                    lazyload: "countrycodes",
                                    "locale.x": n,
                                    _csrf: e.getCSRFToken(),
                                    flowId: e.getFlowId()
                                };
                                if (s >= o) return;
                                r && (t._sessionID = r), s += 1, $.ajax({
                                    url: i,
                                    method: "POST",
                                    data: t,
                                    success: u,
                                    fail: a
                                })
                            }
                            var t = document.querySelector('input[name="locale.x"]'),
                                n = t && t.value,
                                r = e.getSessionId(),
                                i = "/signin/load-resource",
                                s = 0,
                                o = 2;
                            a()
                        }
                        var e = login.utils;
                        return {
                            showCookieBanner: t,
                            loadPhoneCountryCodes: n
                        }
                    }(),
                    function() {
                        var e = function(e) {
                            function t(t) {
                                return e.classList ? e.classList.contains(t) : !!e.className.match(new RegExp("(\\s|^)" + t + "(\\s|$)"))
                            }

                            function n(n) {
                                e.classList ? e.classList.add(n) : t(n) || (e.className += " " + n)
                            }

                            function r(n) {
                                if (e.classList) e.classList.remove(n);
                                else if (t(n)) {
                                    var r = new RegExp("(\\s|^)" + n + "(\\s|$)");
                                    e.className = e.className.replace(r, " ")
                                }
                            }

                            function i(t) {
                                var n;
                                if (typeof t != "string") return;
                                return n = "data-" + t.replace(/([A-Z])/g, "-$1").toLowerCase(), e.getAttribute(n)
                            }

                            function s() {
                                var t, n = e.offsetHeight;
                                return typeof getComputedStyle == "undefined" ? n : (t = getComputedStyle(e), n += parseInt(t.marginTop) + parseInt(t.marginBottom), n)
                            }

                            function o(t, n) {
                                return n ? e.setAttribute(t, n) : e.getAttribute(t)
                            }

                            function u(t) {
                                return e.querySelectorAll(t)
                            }

                            function a(t) {
                                var n = e.textContent !== undefined && e.textContent !== null;
                                if (t === undefined) return n ? e.textContent : e.innerText;
                                n ? e.textContent = t : e.innerText = t
                            }

                            function f() {
                                e.parentNode.removeChild(e)
                            }

                            function l() {
                                t("hide") ? r("hide") : n("hide")
                            }

                            function c(t) {
                                e.appendChild(t)
                            }

                            function h() {
                                e.focus()
                            }

                            function p(t) {
                                e.value = t
                            }
                            typeof e == "string" && (e = document.querySelector(e));
                            if (!e) return;
                            return {
                                hasClass: t,
                                addClass: n,
                                removeClass: r,
                                data: i,
                                outerHeight: s,
                                text: a,
                                attr: o,
                                find: u,
                                remove: f,
                                toggle: l,
                                append: c,
                                focus: h,
                                val: p
                            }
                        };
                        e.ajax = function(e) {
                            var t, n, r, i = [],
                                s;
                            if (!e || e && !e.url) return;
                            try {
                                t = window.XMLHttpRequest ? new XMLHttpRequest : new ActiveXObject("Microsoft.XMLHTTP")
                            } catch (o) {}
                            if (!t) return;
                            e.method = e.method || "POST";
                            if (e.data && typeof e.data != "string")
                                for (s in e.data) i.push(encodeURIComponent(s) + "=" + encodeURIComponent(e.data[s]));
                            t.onreadystatechange = function() {
                                if (t.readyState !== 4) return;
                                n = t.response || t.responseText;
                                if (t.status === 200 && n) {
                                    try {
                                        n = JSON.parse(n)
                                    } catch (r) {}
                                    typeof e.success == "function" && e.success(n)
                                }
                                t.status !== 200 && typeof e.fail == "function" && e.fail(t), typeof e.complete == "function" && e.complete()
                            }, t.open(e.method, e.url), t.setRequestHeader("X-Requested-With", "XMLHttpRequest"), e.method === "POST" && (t.setRequestHeader("Content-type", "application/x-www-form-urlencoded"), t.setRequestHeader("Accept", "application/json")), e.method === "GET" && t.setRequestHeader("Accept", "application/json");
                            if (typeof e.headers == "object" && e.headers.length)
                                for (r in e.headers) t.setRequestHeader(r, e.headers[r]);
                            return t.send(i && i.join("&")), t
                        }, window.$ = e
                    }(), login.view = function() {
                        function e(e) {
                            var r = document.querySelector("input[name=splitLoginContext]"),
                                f = e && e.model || {};
                            typeof window.showGdprBanner == "function" && window.showGdprBanner(), r.value = f.splitLoginContext, v(f), l(f), n(f), i(f), s(f), o(f), u(f), d(f), a(f), c(f), t(f), login.verification && login.verification.updateView(f), f.webAuthnLoginContext && login.webAuthnLogin && login.webAuthnLogin(f)
                        }

                        function t(e) {
                            var t = document.querySelector("#email"),
                                n = document.querySelector("#phone"),
                                r = document.querySelector(".countryPhoneSelectWrapper"),
                                i = document.querySelector("#login_emaildiv"),
                                s = document.querySelector(".profileRememberedEmail");
                            e.profile || (t && t.removeAttribute("disabled"), n && n.removeAttribute("disabled")), r && $(r).addClass("hide"), i && $(i).removeClass("phoneInputWrapper"), !e.profile && s && $(s).removeClass("cookiedProfile"), !e.phone && n ? n.value = null : e.phone && t && (t.value = null)
                        }

                        function n(e) {
                            var t = document.querySelector("#splitEmail"),
                                n = document.querySelector("#splitEmailSection"),
                                r = document.querySelector("#splitPhoneSection"),
                                i = document.querySelector("#rememberProfileEmail"),
                                s = document.querySelector("#email"),
                                o = document.querySelector("#phone"),
                                u = document.querySelector(".forgotLink"),
                                a = document.querySelector(".forgotLink .bubble-tooltip"),
                                f = document.querySelector(".actions"),
                                l = document.querySelector("#loginWithPhoneOption"),
                                c = document.querySelector("#loginWithEmailOption"),
                                p = $("body").data("phonePasswordEnabled"),
                                d = $("body").data("phonePinEnabled");
                            e.splitLoginContext === "inputEmail" || e.splitLoginContext === "inputPhone" ? (t && $(t).removeClass("hide"), i && typeof e.rememberProfile != "undefined" && (i.checked = e.rememberProfile === "true" || e.rememberProfile === !0), h()) : (e.tpdVariant !== "autoSend" && t && $(t).addClass("hide"), o && o.blur(), s && s.blur()), n && e.splitLoginContext === "inputEmail" && ($(n).removeClass("hide"), s.removeAttribute("disabled"), d || p ? (l && $(l).removeClass("hide"), c && $(c).addClass("hide"), u && $(u).addClass("hide"), a && $(a).addClass("hide")) : e.hidePwrOnEmailPage ? (u && $(u).addClass("hide"), a && $(a).addClass("hide")) : u && $(u).removeClass("hide"), $(f).removeClass("phonePresent"), r && $(r).addClass("hide"), o && (o.value = "", o.setAttribute("disabled", "disabled")));
                            if (r && e.splitLoginContext === "inputPhone") {
                                n && $(n).addClass("hide"), $(r).removeClass("hide");
                                if (d || p) l && $(l).addClass("hide"), c && $(c).removeClass("hide")
                            }
                        }

                        function r(e) {
                            if (!e.enableSmartlock) return;
                            login.smartLock(e)
                        }

                        function i(e) {
                            var t = document.querySelector(".educationMessage");
                            e.showEducationMessage === !0 && e.splitLoginContext === "inputPin" ? t && $(t).removeClass("hide") : t && $(t).addClass("hide")
                        }

                        function s(e) {
                            var t = document.querySelector("#splitPassword"),
                                n = document.querySelector("#splitPasswordSection"),
                                i = document.querySelector("#splitPinSection"),
                                s = document.querySelector("#password"),
                                o = document.querySelector("#pin"),
                                u = document.querySelector("#rememberProfilePassword"),
                                a = document.querySelector(".forgotLink"),
                                f = document.querySelector("#phone"),
                                l = document.querySelector('#splitEmail input[type="password"]');
                            l && l.value.trim() && (s.value = l.value, l.value = ""), e.splitLoginContext === "inputPassword" || e.splitLoginContext === "inputPin" ? (t && e.tpdVariant !== "autoSend" && $(t).removeClass("hide"), r(e), u && (u.checked = e.rememberProfile === "true" || e.rememberProfile === !0), e.splitLoginContext === "inputPassword" && !e.tpdVariant && a && $(a).removeClass("hide"), $(s).attr("disabled") === "disabled" && s.removeAttribute("disabled"), e.smartlockStatus !== "linked" && !e.verification && p(e)) : (t && $(t).addClass("hide"), s.value = "", o && (o.value = "")), n && e.splitLoginContext === "inputPassword" && (i && $(i).addClass("hide"), $(n).removeClass("hide")), i && e.splitLoginContext === "inputPin" && ($(n).addClass("hide"), $(i).removeClass("hide")), e.profile && e.profile.phone && f && (f.value = e.profile.phone), $("body").hasClass("desktop") && s.focus()
                        }

                        function o(e) {
                            var t = document.querySelector("input[name=splitLoginContext]"),
                                n = document.querySelector(".profileDisplayEmail"),
                                r = document.querySelector(".profileDisplayName"),
                                i = document.querySelector(".profileRememberedEmail"),
                                s = document.querySelector(".profileIcon"),
                                o = document.querySelector("#email"),
                                u = document.querySelector(".profileDisplayPhoneCode"),
                                a;
                            if (e.tpdVariant === "autoSend") return;
                            if (!e.profile) {
                                s && ($(s).addClass("hide"), $(s).text(""), s.removeAttribute("style"), $(s).removeClass("profilePhoto"), $(s).removeClass("profileInitials"), $(s).addClass("profilePlaceHolderImg")), n && $(n).text(""), u && $(u).text(""), r && $(r).addClass("hide"), o.value = "", i && $(i).addClass("hide"), window.dispatchEvent && window.dispatchEvent(createNewEvent("resize"));
                                return
                            }
                            a = e.profile.phone || e.profile.email, a && e.splitLoginContext !== "inputEmail" && e.splitLoginContext !== "inputPhone" && (n && $(n).text(a), i && $(i).removeClass("hide")), e.profile.phoneCode && u && $(u).text(e.profile.phoneCode)
                        }

                        function u(e) {
                            function t(e, t) {
                                var n = login.utils.getQueryParamFromUrl("ulPage", e);
                                return n ? login.utils.updateParamValue(e, "ulPage", t) : e
                            }
                            var n = $(document.querySelector("#signupContainer")),
                                r = e.splitLoginContext === "inputEmail" || e.splitLoginContext === "inputPhone",
                                i, s, o, u;
                            if (!n) return;
                            o = $(signupContainer.querySelector("#createAccount")), i = n.data("hideOnEmail") === "true", s = n.data("hideOnPass") === "true", u = o && o.attr("href"), r ? (i ? n.addClass("hide") : n.removeClass("hide"), o && o.attr("href", t(u, "email"))) : (s ? n.addClass("hide") : n.removeClass("hide"), o && o.attr("href", t(u, "pwd")))
                        }

                        function a(e) {
                            var t = document.querySelector("footer"),
                                n = document.querySelector("#login"),
                                r = document.querySelector("#login .contentContainer"),
                                i = document.querySelector("#verification .contentContainer"),
                                s = document.querySelector("#verification"),
                                o;
                            e.verification ? (o = document.querySelector(".activeContent"), $(n).addClass("hide"), $(s) && $(s).removeClass("hide"), $(t).addClass("footerWithIcon"), $(o).removeClass("activeContent"), $(i) && $(i).addClass("activeContent"), f(e.verification), login.tpdLogin && login.tpdLogin.instrumentVerificationViewRendered()) : (o = document.querySelector(".activeContent"), $(n).removeClass("hide"), $(s) && $(s).addClass("hide"), $(t).removeClass("footerWithIcon"), $(o).removeClass("activeContent"), $(r).addClass("activeContent"))
                        }

                        function f(e) {
                            if (!e) return;
                            var t = document.querySelector(".account"),
                                n = document.querySelector(".mobileNotification .pin"),
                                r = document.querySelector(".twoDigitPin"),
                                i = document.querySelector("#uncookiedMessage"),
                                s = document.querySelector("#cookiedMessage");
                            $(t).text(e.email), e.pin && n ? ($(n).text(e.pin), $(r).text(e.pin), r.setAttribute("style", "font-weight: bold"), $(i).removeClass("hide")) : $(s).removeClass("hide")
                        }

                        function l(e) {
                            var t = document.querySelectorAll(".notifications");
                            for (var n = 0; n < t.length; n++) $(t[n]).text(""), e.notifications && e.notifications.msg && (t[n].innerHTML = '<p class="notification ' + e.notifications.type + '" role="alert">' + e.notifications.msg + "</p>")
                        }

                        function c(e) {
                            var t = document.querySelector("#emailSubTagLine"),
                                n = document.querySelector("#phoneSubTagLine"),
                                r = document.querySelector("#pwdSubTagLine");
                            e.splitLoginContext === "inputPassword" || e.splitLoginContext === "inputPin" ? (t && $(t).addClass("hide"), n && $(n).addClass("hide"), r && $(r).removeClass("hide")) : e.splitLoginContext === "inputPhone" ? (n && $(n).removeClass("hide"), t && $(t).addClass("hide"), r && $(r).addClass("hide")) : (t && $(t).removeClass("hide"), n && $(n).addClass("hide"), r && $(r).addClass("hide"))
                        }

                        function h() {
                            var e = login.utils.isHybridLoginExperience();
                            login.logger.log({
                                evt: "state_name",
                                data: e ? "begin_hybrid_login" : "begin_email",
                                instrument: !0
                            }), login.logger.log({
                                evt: "transition_name",
                                data: e ? "prepare_hybrid" : "prepare_email",
                                instrument: !0
                            }), login.logger.log({
                                evt: "is_cookied",
                                data: "N",
                                instrument: !0
                            }), login.logger.pushLogs()
                        }

                        function p(e) {
                            var t = document.querySelector("#password"),
                                n = document.querySelector("#phone"),
                                r = login.utils.isFieldPrefilled(t),
                                i = login.utils.isHybridLoginExperience(),
                                s = i ? "prepare_hybrid_pwd" : "prepare_pwd";
                            s += login.utils.getKmliCb() ? "_ot" : "", document.querySelector("#moreOptionsContainer") && e.moreOptions === !0 && (s += "_more_opt", login.logger.log({
                                evt: "exp_shown",
                                data: "tpd",
                                instrument: !0
                            })), login.logger.log({
                                evt: "state_name",
                                data: i ? "begin_hybrid_pwd" : "begin_pwd",
                                instrument: !0
                            }), login.logger.log({
                                evt: "pub_cred_type",
                                data: n && n.value ? "phone" : "email",
                                instrument: !0
                            }), login.logger.log({
                                evt: "transition_name",
                                data: s,
                                instrument: !0
                            }), login.logger.log({
                                evt: "is_cookied",
                                data: "Y",
                                instrument: !0
                            }), login.logger.log({
                                evt: "autofill",
                                data: r ? "Y" : "N",
                                instrument: !0
                            }), login.logger.pushLogs()
                        }

                        function d(e) {
                            function n(e) {
                                var t = document.querySelectorAll(".captcha-container");
                                for (var n = 0; n < t.length; n++) e ? $(t[n]).removeClass("hide") : $(t[n]).addClass("hide")
                            }
                            var t;
                            n(e.captcha);
                            if (!e.captcha) return;
                            t = login.utils.getActiveCaptchaElement({
                                value: e.splitLoginContext
                            });
                            if (!t) return;
                            e.captcha.captchaImgUrl && t.image && t.image.setAttribute("src", e.captcha.captchaImgUrl), e.captcha.captchaAudioUrl && t.audioTag && t.audioTag.setAttribute("src", e.captcha.captchaAudioUrl), e.captcha.captchaAudioUrl && t.audioLink && t.audioLink.setAttribute("href", e.captcha.captchaAudioUrl)
                        }

                        function v(e) {
                            if (!e.adsChallengeVerified) return;
                            $("#login").removeClass("hide"), document.getElementById("ads-container") && (document.getElementById("ads-container").style.display = "none")
                        }
                        return login.storeInstance = login.store(), login.pubsub.subscribe("STATE_UPDATED", e), {
                            render: e,
                            updateNotificationView: l
                        }
                    }(),
                    function() {
                        typeof Object.assign != "function" && (Object.assign = function(e, t) {
                            if (e === null) throw new TypeError("Cannot convert undefined or null to object");
                            var n = Object(e);
                            for (var r = 1; r < arguments.length; r++) {
                                var i = arguments[r];
                                if (i !== null)
                                    for (var s in i) Object.prototype.hasOwnProperty.call(i, s) && (n[s] = i[s])
                            }
                            return n
                        }), String.prototype.trim || (String.prototype.trim = function() {
                            return this.replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g, "")
                        })
                    }(), login.fn = function() {
                        function t(t) {
                            var n = document.getElementById("fconfig");
                            n && n.parentNode && n.parentNode.removeChild(n), n = document.createElement("script"), n.id = "fconfig", n.type = "application/json", n.setAttribute("fncls", e), n.setAttribute("nonce", $("body").data("nonce")), n.text = '{"f":"' + t.fnSessionId + '","s":"' + t.sourceId + '","b":"' + t.beaconUrl + '"}', document.body.appendChild(n)
                        }

                        function n(e) {
                            var t = document.createElement("script");
                            t.src = e.fnUrl, t.onload = function() {
                                r(e)
                            }, document.body.appendChild(t)
                        }

                        function r(e) {
                            e.enableSpeedTyping && typeof initTsFb == "function" && initTsFb({
                                detail: {
                                    type: "UL",
                                    fields: ["email", "password"]
                                }
                            })
                        }

                        function i(e) {
                            PAYPAL.syncData && typeof PAYPAL.syncData.initSync == "function" && e && (e.detail = {
                                type: "UL",
                                fields: ["email", "password"]
                            }, PAYPAL.syncData.initSync(e))
                        }

                        function s() {
                            if (PAYPAL.syncData && typeof PAYPAL.syncData.flushData == "function") try {
                                PAYPAL.syncData.flushData()
                            } catch (e) {}
                        }

                        function o(e) {
                            e && e.sourceId && typeof PAYPAL.ulSync == "object" && (PAYPAL.ulSync.sourceId = e.sourceId, i(PAYPAL.ulSync))
                        }

                        function u() {
                            var e = $("body").data("enableFnBeaconOnWebViews");
                            return !e && /(iPhone|iPod|iPad).*AppleWebKit(?!.*Safari)/i.test(window.navigator.userAgent) ? !1 : !0
                        }

                        function a() {
                            u() && PAYPAL && PAYPAL.ulData && (t(PAYPAL.ulData), n(PAYPAL.ulData)), i(PAYPAL.ulSync)
                        }
                        var e = "fnparams-dede7cc5-15fd-4c75-a9f4-36c430ee3a99";
                        return {
                            initialize: a,
                            initializeFnSync: i,
                            addFnSyncData: s,
                            updateFnSyncContext: o
                        }
                    }(), login.verification = function() {
                        function A(e) {
                            login.utils.updateView({
                                splitLoginContext: "inputPassword",
                                profile: {
                                    email: h
                                },
                                verification: null,
                                notifications: e.notifications
                            })
                        }

                        function O() {
                            var e, t = document.querySelector("#expired .slimP");
                            t && t.textContent && (e = {
                                msg: t && t.textContent,
                                type: "notification-warning"
                            }), login.utils.updateView({
                                splitLoginContext: "inputPassword",
                                profile: {
                                    email: h
                                },
                                tpdVariant: N,
                                verification: null,
                                ulSync: _("inputPassword"),
                                notifications: e
                            })
                        }

                        function M() {
                            if (PAYPAL.syncData && typeof PAYPAL.syncData.data == "object") return JSON.stringify(PAYPAL.syncData.data)
                        }

                        function _(e) {
                            var t = PAYPAL.ulSync && PAYPAL.ulSync.sourceId || "",
                                n = t.indexOf("REMEMBERED") !== -1 ? "_REMEMBERED" : "",
                                r = {
                                    inputPassword: "UNIFIED_LOGIN_INPUT_PASSWORD"
                                };
                            return {
                                sourceId: r[e] + n
                            }
                        }

                        function D() {
                            var e = login.storeInstance.getState().model.rememberProfile,
                                t = {
                                    _csrf: o.value,
                                    intent: "completeLogin",
                                    accessToken: l,
                                    "locale.x": u.value,
                                    rememberProfile: e === "true" || e === !0,
                                    login_email: h,
                                    flowId: login.utils.getFlowId(),
                                    tpdVariant: N,
                                    tpdTriggerMethod: k
                                },
                                n = M();
                            n && (t.fn_sync_data = n), login.utils.getCtxId() && (t.ctxId = login.utils.getCtxId()), $.ajax({
                                url: "/signin/challenge/push?intent=" + login.utils.getIntent(),
                                type: "POST",
                                data: t,
                                success: function(e) {
                                    if (e && e.pollStatus === "LoggedIn" && e.returnUrl) return window.location.href = e.returnUrl;
                                    if (e && e.pollStatus === "Failed") return A(e);
                                    O(), login.tpdLogin.instrumentTpdExpired("NO_RESPONSE")
                                }
                            })
                        }

                        function P() {
                            if (!f) return;
                            if (t >= e) {
                                O(), login.tpdLogin.instrumentTpdExpired("NO_ACTION");
                                return
                            }
                            t++, a = $.ajax({
                                url: "/signin/challenge/push",
                                type: "POST",
                                data: {
                                    _csrf: o.value,
                                    intent: "poll",
                                    accessToken: l,
                                    authflowDocumentId: c,
                                    retryCount: t,
                                    "locale.x": u.value,
                                    flowId: login.utils.getFlowId(),
                                    tpdVariant: N,
                                    tpdTriggerMethod: k
                                },
                                success: L,
                                fail: function() {
                                    f && P()
                                }
                            })
                        }

                        function H(e) {
                            e.preventDefault(), $(S).removeClass("hide")
                        }

                        function B(e) {
                            var n = document.querySelector("form[name=login]"),
                                r;
                            e = e || {}, f = !0, l = e.accessToken || l, c = e.authflowDocumentId || c, h = e.email || h, t = 0, N = e.variant || N, k = e.tpdTriggerMethod || k, P(), r = document.querySelector("[name=authdocId]"), r ? r.setAttribute("value", c) : login.utils.addHiddenElement("authdocId", c, n)
                        }

                        function j() {
                            window.location.href = window.location.href
                        }

                        function F(e) {
                            var t = getEventTarget(e);
                            if (!S) return;
                            if ($(t).hasClass("showSurvey")) return;
                            $(S).addClass("hide")
                        }

                        function I(e) {
                            var t = getEventTarget(e),
                                n = $(t).data("reason");
                            e.preventDefault(), $(w).addClass("hide"), $(w).removeClass("greyOut"), q(), login.tpdLogin.instrumentUsePasswordInstead(n), p && $(p).addClass("hide"), T && $(T).removeClass("hide")
                        }

                        function q() {
                            f = !1, a.abort()
                        }

                        function R() {
                            s = 0, setTimeout(function() {
                                $(w).removeClass("hide")
                            }, n)
                        }

                        function U(e) {
                            e.preventDefault();
                            if ($(e.target).hasClass("greyOut")) return;
                            login.tpdLogin.instrumentResendClicked(), q(), t = 0, $(w).addClass("greyOut"), s++, $.ajax({
                                url: "/signin/challenge/push",
                                type: "POST",
                                data: {
                                    _csrf: o.value,
                                    intent: "resend",
                                    accessToken: l,
                                    authflowDocumentId: c,
                                    "locale.x": u.value,
                                    flowId: login.utils.getFlowId(),
                                    tpdVariant: N,
                                    tpdTriggerMethod: k
                                },
                                success: function(t) {
                                    if (t && t.resendStatus === "Success") {
                                        B({
                                            accessToken: l,
                                            authflowDocumentId: c,
                                            email: h
                                        }), $(w).addClass("hide"), $(E).removeClass("hide"), setTimeout(function() {
                                            $(E).addClass("hide"), s < i && ($(w).removeClass("hide"), $(w).removeClass("greyOut"))
                                        }, r);
                                        return
                                    }
                                    t && t.notifications && login.view.updateNotificationView(t)
                                },
                                fail: function() {}
                            })
                        }

                        function z(e) {
                            var t = document.querySelector("#moreOptionsContainer"),
                                n = document.querySelector("#tpdButtonContainer"),
                                r = document.querySelector('input[name="tpdEligible"]'),
                                i = document.querySelector("form[name=login]"),
                                s, o = document.querySelector("#btnNext");
                            if (!e || !n || !t) return;
                            if (e.tpdVariant || e.tpdAutoSend) r ? r.value = "true" : (s = document.createElement("input"), s.setAttribute("type", "hidden"), s.setAttribute("name", "tpdEligible"), s.setAttribute("value", "true"), $(i).append(s));
                            e.tpdVariant === "moreOptions" && ($(t).removeClass("hide"), $(".forgotLink").addClass("hide")), e.tpdVariant === "tpdButton" && ($(t).addClass("hide"), $(n).removeClass("hide"), $(".forgotLink").removeClass("hide"), $("#signupContainer").addClass("hide")), e.tpdAutoSend && (login.tpdLogin && login.tpdLogin.instrumentTpdLoginAutoTriggered(), login.tpdLogin && login.tpdLogin.attemptTpdLogin("autoSend")), e.splitLoginContext === "inputEmail" && ($(t).addClass("hide"), $(n).addClass("hide"), r && r.value === "true" && (r.value = ""));
                            if (login.utils.isTpdDemo() && e.splitLoginContext !== "inputEmail") {
                                var u = document.querySelector("#splitPassword");
                                o && $(o).addClass("hide"), u && $(u).removeClass("hide")
                            } else o && $(o).removeClass("hide")
                        }
                        var e = 9,
                            t = 0,
                            n = 5e3,
                            r = 3e3,
                            i = 3,
                            s = 0,
                            o = document.querySelector("input[name=_csrf]"),
                            u = document.querySelector('input[name="locale.x"]'),
                            a, f = !1,
                            l, c, h, p = document.querySelector("#verification"),
                            d = document.querySelector(".verificationSubSection"),
                            v = document.querySelector("#expired"),
                            m = document.querySelector("#denied"),
                            g = document.querySelector("#expiredTryAgainButton"),
                            y = document.querySelector("#pendingNotYouLink"),
                            b = document.querySelector("#pending #tryPasswordLink"),
                            w = document.querySelector("#resend"),
                            E = document.querySelector(".sentMessage"),
                            S = document.querySelector("#passwordInsteadDropDown"),
                            x = document.querySelector("#passwordInsteadGroup"),
                            T = document.querySelector("#login"),
                            N, C, k, L = function(e) {
                                e || P(), o.value = e._csrf || o.value;
                                switch (e.pollStatus) {
                                    case "Accepted":
                                        q(), C = C ? !1 : e.pollStatus === "Accepted", C && (login.logger.log({
                                            evt: "TPD_CLIENT",
                                            data: "Approved_" + e.tpdTriggerMethod,
                                            calEvent: !0
                                        }), login.logger.pushLogs()), D();
                                        break;
                                    case "Downgraded":
                                        P();
                                        break;
                                    case "Denied":
                                        q(), $(d).addClass("hide"), $(m).removeClass("hide");
                                        break;
                                    case "Failed":
                                        q(), A(e);
                                        break;
                                    default:
                                        e.errorView ? (O(), login.tpdLogin.instrumentTpdExpired("RCS_SERVICE_ERROR")) : P()
                                }
                            };
                        return g && (g.onclick = j), y && (y.onclick = function(e) {
                            q(), login.tpdLogin.instrumentNotYouClicked(), login.utils.notYouClickHandler(e)
                        }), login.pubsub && login.pubsub.subscribe("WINDOW_CLICK", F), b && $(b).hasClass("showSurvey") ? (addEvent(b, "click", H), addEvent(x, "click", I)) : b && addEvent(b, "click", I), addEvent(w, "click", U), {
                            startPolling: B,
                            showResendLink: R,
                            updateView: z
                        }
                    }(), login.core = function() {
                        return function() {
                            function j(e) {
                                var t = getEventTarget(e);
                                if (!M || !e || !t) return;
                                if ($(t).hasClass("moreOptionsInfo")) {
                                    eventPreventDefault(e), $(M).hasClass("hide") && (login.logger.log({
                                        evt: "state_name",
                                        data: D ? "begin_hybrid_pwd" : "begin_pwd",
                                        instrument: !0
                                    }), login.logger.log({
                                        evt: "transition_name",
                                        data: D ? "process_hybrid_pwd_more_opt" : "process_pwd_more_opt",
                                        instrument: !0
                                    }), login.logger.log({
                                        evt: "TPD_CLIENT",
                                        data: "CLICKED_MORE_OPTIONS",
                                        calEvent: !0
                                    }), login.logger.pushLogs()), $(M).removeClass("hide");
                                    return
                                }
                                $(M).addClass("hide")
                            }

                            function F(e) {
                                var t = getEventTarget(e);
                                if (!H || !e || !t) return;
                                $(H).addClass("hide")
                            }

                            function I(e) {
                                if (!o) return e;
                                var t = o.container.querySelector(".phoneCode"),
                                    n = t && $(t).text(),
                                    r = e.lastIndexOf(n, 0) === 0;
                                return r ? e.substr(n.length) : e
                            }

                            function q(e) {
                                if (f && f.value === "inputPassword" && !P) return;
                                login.utils.doesItLookLikeEmail(e) ? rt !== "email" && (!P && f.setAttribute("value", "inputEmail"), rt = "email", $(S).addClass("hide"), $(i.container).removeClass("phoneInputWrapper")) : (u.field.value = e, rt !== "phone" && (!P && f.setAttribute("value", "inputPhone"), rt = "phone", $(S).removeClass("hide"), $(i.container).addClass("phoneInputWrapper")))
                            }

                            function R() {
                                u.field.value = null, i.field.value = null
                            }

                            function it(e) {
                                if (!e || typeof e != "string") return;
                                return e.replace(V, "")
                            }

                            function st(e) {
                                return e.field ? it(e.field.value) ? !0 : (ct(e), ht(e), !1) : !0
                            }

                            function ot(e) {
                                var t = e && e.field && e.field.value;
                                return !e || !e.field || e.field.hasAttribute("disabled") ? !0 : t ? (t = t && t.replace(G, ""), !t || t.match(K) ? (ct(e), pt(e), vt(e), !1) : !0) : (ct(e), ht(e), mt(e), !1)
                            }

                            function ut(e) {
                                var t = e && e.field && it(e.field.value);
                                return e && e.field && e.field.hasAttribute("disabled") ? !0 : t ? t && t.match(Q) ? (ct(e), pt(e), !1) : !0 : (ct(e), ht(e), !1)
                            }

                            function at(e, t) {
                                var n, r, i = !0,
                                    s = login.utils.getActiveCaptchaElement(f);
                                return n = st(e), n ? (r = st(t), r ? (s && s.field && (i = st(s)), i ? !0 : !1) : !1) : !1
                            }

                            function ft(e) {
                                if (e.value === "inputEmail") return document.querySelector("#rememberProfileEmail");
                                if (e.value === "inputPassword") return document.querySelector("#rememberProfilePassword");
                                return
                            }

                            function lt(e) {
                                var t = e.field.value.replace(V, "");
                                return !t.match(J) && !e.field.hasAttribute("disabled") ? (ct(e), pt(e), !1) : !0
                            }

                            function ct(e) {
                                $(e.container).addClass("hasError"), e.container.style["z-index"] = 100, $(e.errMsgContainer).addClass("show"), e.field.focus()
                            }

                            function ht(e) {
                                $(e.errMsg).removeClass("hide")
                            }

                            function pt(e) {
                                $(e.invalidMsg).removeClass("hide")
                            }

                            function dt(e, t) {
                                t && $(e.container).removeClass("hasError"), e.container.style["z-index"] = 1, $(e.errMsgContainer).removeClass("show")
                            }

                            function vt(e) {
                                $(e.errMsg).addClass("hide")
                            }

                            function mt(e) {
                                $(e.invalidMsg).addClass("hide")
                            }

                            function gt() {
                                var e, t = /\&passwordRecoveryByPhoneEnabled\=true/;
                                if (L)
                                    for (var n = 0; n < L.length; n++) e = L[n].getAttribute("href").replace(t, ""), L[n].setAttribute("href", e);
                                A && A.setAttribute("data-src", A.getAttribute("data-src").replace(t, ""))
                            }

                            function yt() {
                                var e;
                                if (L)
                                    for (var t = 0; t < L.length; t++) e = L[t].getAttribute("href") + "&passwordRecoveryByPhoneEnabled=true", L[t].setAttribute("href", e);
                                A && A.setAttribute("data-src", A.getAttribute("data-src") + "&passwordRecoveryByPhoneEnabled=true")
                            }

                            function bt() {
                                var e = document.querySelector('input[name="splitLoginContext"]'),
                                    t = document.querySelector('input[name="splitLoginCookiedFallback"]');
                                $(p).removeClass("hide"), $(d).addClass("hide"), T && $(T).addClass("hide"), i.field && i.field.removeAttribute("disabled"), s.field && s.field.removeAttribute("disabled"), o.field && o.field.setAttribute("disabled", "disabled"), u.field && u.field.setAttribute("disabled", "disabled"), a.field && a.field.setAttribute("disabled", "disabled"), tt || $(k).removeClass("hide"), w && $(w).addClass("hide"), $(h).removeClass("phonePresent"), rt = "email", e && (N && $(N).removeClass("hide"), e.value = "inputEmail", t && (e.value = "inputPassword"))
                            }

                            function wt() {
                                var e = document.querySelector('input[name="splitLoginContext"]');
                                $(d).removeClass("hide"), $(p).addClass("hide"), T && !$(v).hasClass("hide") && $(T).removeClass("hide"), o.field && o.field.removeAttribute("disabled"), u.field && u.field.removeAttribute("disabled"), a.field && a.field.removeAttribute("disabled"), i.field && i.field.setAttribute("disabled", "disabled"), s.field && s.field.setAttribute("disabled", "disabled"), $(k).addClass("hide"), $(h).addClass("phonePresent"), y && $(y).addClass("hide"), rt = "phone", N && $(N).addClass("hide"), e && !tt && (e.value = e.value === "inputPassword" ? "inputPin" : "inputPhone")
                            }

                            function Et() {
                                function i() {
                                    var e = n.options[n.selectedIndex].value,
                                        t = e.split(" ");
                                    return {
                                        countryCode: t && (t[0] || ""),
                                        phoneCode: t && (t[1] || "")
                                    }
                                }
                                var e = o.container.querySelector(".countryCode"),
                                    t = o.container.querySelector(".phoneCode"),
                                    n = o.field,
                                    r;
                                r = i(), $(e).text(r.countryCode), $(t).text(r.phoneCode)
                            }

                            function St() {
                                login.logger.log({
                                    evt: "state_name",
                                    data: "begin_hybrid_login",
                                    instrument: !0
                                }), login.logger.log({
                                    evt: "transition_name",
                                    data: "click_change_country_code",
                                    instrument: !0
                                }), login.logger.pushLogs()
                            }

                            function xt(e) {
                                eventPreventDefault(e);
                                var t = document.querySelector('input[name="splitLoginContext"]'),
                                    n = document.querySelector(".countryPhoneSelectWrapper");
                                $(d).removeClass("hide"), $(p).addClass("hide"), $(y).addClass("hide"), $(w).removeClass("hide"), dt(i, !0), o.field && o.field.removeAttribute("disabled"), u.field && u.field.removeAttribute("disabled"), u.field.focus(), N && $(N).addClass("hide"), C && $(C).removeClass("hide"), i.field && (i.field.value = ""), login.view.updateNotificationView({}), i.field && i.field.setAttribute("disabled", "disabled"), t.value = "inputPhone", login.logger.log({
                                    evt: "state_name",
                                    data: "begin_email",
                                    instrument: !0
                                }), login.logger.log({
                                    evt: "transition_name",
                                    data: "prepare_phone",
                                    instrument: !0
                                }), login.logger.pushLogs(), login.logger.log({
                                    evt: "state_name",
                                    data: "begin_phone",
                                    instrument: !0
                                }), login.logger.log({
                                    evt: "transition_name",
                                    data: "prepare_phone",
                                    instrument: !0
                                }), login.logger.pushLogs(), nt ? (a.field && a.field.removeAttribute("disabled"), s.field && s.field.setAttribute("disabled", "disabled"), rt = "phone", $(h).addClass("phonePresent"), $(k).addClass("hide")) : (s.field && s.field.removeAttribute("disabled"), a.field && a.field.setAttribute("disabled", "disabled"), rt = "phonePassword", n && $(n).removeClass("hide"))
                            }

                            function Tt(e) {
                                eventPreventDefault(e);
                                var t = document.querySelector('input[name="splitLoginContext"]');
                                $(p).removeClass("hide"), $(d).addClass("hide"), $(w).addClass("hide"), $(y).removeClass("hide"), T && $(T).addClass("hide"), dt(u, !0), i.field && i.field.removeAttribute("disabled"), s.field && s.field.removeAttribute("disabled"), i.field.focus(), o.field && o.field.setAttribute("disabled", "disabled"), u.field && u.field.setAttribute("disabled", "disabled"), a.field && a.field.setAttribute("disabled", "disabled"), C && $(C).addClass("hide"), N && $(N).removeClass("hide"), $(h).removeClass("phonePresent"), rt = "email", t.value = "inputEmail", login.logger.log({
                                    evt: "state_name",
                                    data: "begin_phone",
                                    instrument: !0
                                }), login.logger.log({
                                    evt: "transition_name",
                                    data: "prepare_email",
                                    instrument: !0
                                }), login.logger.pushLogs(), login.logger.log({
                                    evt: "state_name",
                                    data: "begin_email",
                                    instrument: !0
                                }), login.logger.log({
                                    evt: "transition_name",
                                    data: "prepare_email",
                                    instrument: !0
                                }), login.logger.pushLogs()
                            }

                            function Nt(e, t) {
                                eventPreventDefault(e), gt(), rt = "email", login.utils.notYouClickHandler(e, function() {
                                    login.logger.log({
                                        evt: "state_name",
                                        data: "begin_phone_pwd",
                                        instrument: !0
                                    }), login.logger.log({
                                        evt: "transition_name",
                                        data: "prepare_email",
                                        instrument: !0
                                    }), login.logger.pushLogs(), login.logger.log({
                                        evt: "state_name",
                                        data: "begin_email",
                                        instrument: !0
                                    }), login.logger.log({
                                        evt: "transition_name",
                                        data: "prepare_email",
                                        instrument: !0
                                    }), login.logger.pushLogs(), typeof t == "function" && t()
                                })
                            }

                            function Ct(e) {
                                var t = document.querySelector("input[name=splitLoginContext]"),
                                    n = document.querySelector("input[name=splitLoginCookiedFallback]"),
                                    r = t && t.value || "";
                                n ? Mt(e) : r === "inputEmail" || r === "inputPhone" || login.utils.isPrefilledEmailNext() || login.utils.isPrefillEmailEnabled() ? Lt(e) : Mt(e)
                            }

                            function kt(e) {
                                var t = I(e);
                                u.field.value = t, i.field.value = t
                            }

                            function Lt(e) {
                                var r, s = window.PAYPAL && window.PAYPAL.slData && window.PAYPAL.slData.smartlockStatus,
                                    o = document.querySelector('input[name="splitLoginContext"]');
                                if (login.utils.isPrefillEmailEnabled() && o.value !== "inputEmail" && login.utils.isTpdDemo()) return eventPreventDefault(e), login.tpdLogin && login.tpdLogin.attemptTpdLogin("autoSend");
                                if (login.utils.isPrefilledEmailNext() && s === "linked") return eventPreventDefault(e), login.utils.addHiddenElement("nextClick", !0, n), login.smartLock();
                                D ? (rt === "phone" && i.field && kt(i.field.value), r = rt === "email" ? ut(i) : ot(i)) : r = rt === "email" ? ut(i) : ot(u);
                                var a = document.querySelectorAll("form[name=login] input"),
                                    l = {},
                                    c = login.utils.getActiveCaptchaElement(f),
                                    h = ft(f),
                                    p = $("body").data("splitPasswordClientTransition"),
                                    d, v, m, g, y, b = document.querySelector("#phoneCode"),
                                    o = login.utils.getSplitLoginContext();
                                Y = !0, eventPreventDefault(e), r && $(i.field).hasClass("validate") && o === "inputEmail" && (r = lt(i)), r && c && c.field && (r = st(c)), r && (o === "inputEmail" || o === "inputPhone") && (login.logger.log({
                                    evt: "state_name",
                                    data: login.logger.getStateName(),
                                    instrument: !0
                                }), login.logger.log({
                                    evt: "transition_name",
                                    data: "process_next",
                                    instrument: !0
                                }), login.logger.pushLogs());
                                if (!r) return;
                                login.utils.showSpinner(), login.fn.addFnSyncData(), (rt === "phonePassword" || rt === "phone") && yt(), t && $(t).text("");
                                if (!(!p || rt !== "phone" && rt !== "phonePassword")) {
                                    d = document.querySelector("#phone"), v = d && d.value.replace(G, ""), m = document.querySelector("#phoneCode"), m = m && m.value.replace(/[A-Z\s]/ig, ""), d.value = v, login.storeInstance.updateModel({
                                        splitLoginContext: nt ? "inputPin" : "inputPassword",
                                        profile: {
                                            phone: v,
                                            phoneCode: m
                                        }
                                    }), login.logger.log({
                                        evt: "state_name",
                                        data: "begin_phone",
                                        instrument: !0
                                    }), login.logger.log({
                                        evt: "transition_name",
                                        data: nt ? "prepare_pin" : "prepare_pwd",
                                        instrument: !0
                                    }), login.logger.pushLogs(), login.utils.hideSpinner(), login.utils.setSliderToPasswordContainer();
                                    return
                                }
                                if (p && rt === "email") {
                                    login.storeInstance.updateModel({
                                        splitLoginContext: "inputPassword",
                                        profile: {
                                            email: i && i.field && i.field.value
                                        },
                                        rememberProfile: h && h.checked
                                    }), login.utils.hideSpinner(), login.utils.setSliderToPasswordContainer();
                                    return
                                }
                                for (var w = 0; w < a.length; w++) l[a[w].name] = a[w].value;
                                delete l.login_password, delete l.login_pin, l.splitLoginContext === "inputPhone" && b && (l.phoneCode = b.value, delete l.login_email), l.splitLoginContext === "inputEmail" && (delete l.login_phone, delete l.phoneCode), D && (l.splitLoginContext === "inputPassword" && l.login_phone && (l.phoneCode = b.value), l.splitLoginContext === "inputPhone" && i.field ? (i.field.setAttribute("disabled", "disabled"), i.field.value = "") : l.splitLoginContext === "inputEmail" && u.field && (u.field.setAttribute("disabled", "disabled"), u.field.value = "")), c && c.field && (l.captcha = c.field.value), h && (l.rememberProfile = h.checked), y = getEventTarget(e), $.ajax({
                                    url: n.getAttribute("action"),
                                    data: l,
                                    success: login.utils.successfulXhrHandler,
                                    fail: login.utils.failedXhrSubmitHandler
                                })
                            }

                            function At() {
                                var e = document.querySelector('input[name="splitLoginCookiedFallback"]'),
                                    t = document.querySelector("#phone"),
                                    n = document.querySelector("#email"),
                                    r = document.querySelector(".profileDisplayEmail"),
                                    i = r && r.innerHTML;
                                if (!i || e || !n || !t) return;
                                n.hasAttribute("disabled") && !t.hasAttribute("disabled") ? (t.value = i, n.value = "") : !n.hasAttribute("disabled") && t.hasAttribute("disabled") && (n.value = i, t.value = "")
                            }

                            function Ot() {
                                rt === "email" ? u && u.field && u.field.setAttribute("disabled", "disabled") : i && i.field && i.field.setAttribute("disabled", "disabled")
                            }

                            function Mt(e) {
                                function o() {
                                    var e = f && f.value;
                                    if (!u.field) return;
                                    P ? t = ot(i) && s.field && at(u, s) : e === "inputPassword" ? t = s.field && at(u, s) : t = a.field && at(u, a)
                                }
                                var t, r = document.querySelector(".profileRememberedEmail");
                                P && rt === "phone" && i.field ? kt(i.field.value) : At(), Y = !0, rt === "email" ? (t = ut(i) && at(i, s), !r && t && $(i.field).hasClass("validate") && (t = lt(i))) : o(), t ? (P && Ot(), login.utils.showSpinner(), login.utils.showSpinnerMessage(), login.fn.addFnSyncData(), eventPreventDefault(e), n && n.submit(), setTimeout(function() {
                                    c.setAttribute("disabled", "disabled")
                                }, 10)) : eventPreventDefault(e)
                            }

                            function _t(e) {
                                var t;
                                if (!Y) return !1;
                                t = e.field.value.replace(V, "");
                                if (t === "") {
                                    ht(e), e.type === "email" && mt(e);
                                    return
                                }
                                vt(e), e.type === "email" && $(e.field).hasClass("validate") ? t.match(J) ? (mt(e), dt(e, !0)) : (ct(e), pt(e)) : dt(e, !0)
                            }

                            function Dt(e) {
                                Y = !1, dt(e)
                            }

                            function Pt(e) {
                                $(e.container).hasClass("hasError") ? Y = !0 : Y = !1
                            }

                            function Ht() {
                                var e = u.field && u.field.value;
                                return u.field && (i.field && i.field.hasAttribute("disabled") || f && f.value === "inputPhone") ? nt ? "phone" : "phonePassword" : f && f.value === "inputPin" || e ? "phone" : "email"
                            }

                            function Bt(e) {
                                var t = login.utils.getActiveCaptchaElement(f),
                                    n = t.audioTag,
                                    r = !!n.canPlayType && !!n.canPlayType("audio/mpeg").replace(/no/, "");
                                if (!r) return !0;
                                eventPreventDefault(e), t.field.focus(), n.play()
                            }

                            function jt(e) {
                                var t = login.utils.getActiveCaptchaElement(f);
                                eventPreventDefault(e), eventStopPropagation(e), $.ajax({
                                    type: "POST",
                                    url: "/signin/refreshCaptcha",
                                    data: {
                                        _csrf: document.querySelector("#token").value
                                    },
                                    dataType: "json",
                                    success: function(e) {
                                        e && e.captcha && (t.image.setAttribute("src", e.captcha.captchaImgUrl), t.audioTag.setAttribute("src", e.captcha.captchaAudioUrl), t.playAudioBtn.setAttribute("href", e.captcha.captchaAudioUrl), t.field.value = "", $("body").hasClass("desktop") && t.field.focus())
                                    }
                                })
                            }

                            function Ft(e) {
                                var t = getEventTarget(e);
                                if (!t) return;
                                setTimeout(function() {
                                    $(t).hasClass("scTrack:unifiedlogin-rememberme-profile-opt-in") ? ($(t).removeClass("scTrack:unifiedlogin-rememberme-profile-opt-in"), $(t).addClass("scTrack:unifiedlogin-rememberme-profile-opt-out")) : ($(t).removeClass("scTrack:unifiedlogin-rememberme-profile-opt-out"), $(t).addClass("scTrack:unifiedlogin-rememberme-profile-opt-in"))
                                }, 10)
                            }

                            function It() {
                                function n(e) {
                                    e.playAudioBtn.onclick = Bt, e.refreshCaptchaBtn.onclick = jt, e.field.onkeyup = _t.bind(null, e), e.field.onblur = Dt.bind(null, e), e.field.onfocus = Pt.bind(null, e)
                                }
                                var e = document.querySelectorAll(".captcha-container");
                                for (var t = 0; t < e.length; t++) n(login.utils.getCaptchaDom(e[t]))
                            }

                            function qt(e) {
                                var t = getEventTarget(e),
                                    r, i, s;
                                if (!t || t.id !== "iconCloseEducation") return;
                                r = document.querySelector(".educationMessage");
                                if (!r) return;
                                i = document.querySelector(".contentContainer"), $(r).addClass("hide"), i && $(i).removeClass("contentContainerShort"), s = document.createElement("input"), s.setAttribute("type", "hidden"), s.setAttribute("name", "removeEducationMsg"), s.setAttribute("value", "true"), $(n).append(s)
                            }

                            function Rt() {
                                var e = document.querySelector("#splitLoginOptOut");
                                e && addEvent(e, "click", login.utils.getOutboundLinksHandler(e, null, "process_split_login_opt_out"))
                            }

                            function Ut(e) {
                                var t = rt === "email" ? ut(i) : ot(u),
                                    n = getEventTarget(e);
                                eventPreventDefault(e), login.tpdLogin && login.tpdLogin.instrumentTpdLoginClicked(n.id), document.body.setAttribute("data-tpd-survey-enabled", !1), t && $(i.field).hasClass("validate") && (t = lt(i));
                                if (!t) return;
                                login.tpdLogin && login.tpdLogin.attemptTpdLogin(n.id)
                            }

                            function zt(e) {
                                gt(), rt = "email", login.utils.notYouClickHandler(e), i.container && dt(i, !0), s.container && dt(s, !0), u.container && dt(u, !0), a.container && dt(a, !0)
                            }
                            var t = document.querySelector("#notifications"),
                                n = document.querySelector("form[name=login]"),
                                r = document.querySelector('input[name="splitLoginCookiedFallback"]'),
                                i = {
                                    container: document.querySelector("#login_emaildiv"),
                                    field: document.querySelector("#email"),
                                    errMsgContainer: document.querySelector("#emailErrorMessage"),
                                    errMsg: document.querySelector("#emailErrorMessage .emptyError"),
                                    invalidMsg: document.querySelector("#emailErrorMessage .invalidError"),
                                    phoneEmailToggleIcon: document.querySelector("#login_emaildiv .icon"),
                                    type: "email"
                                },
                                s = {
                                    container: document.querySelector("#login_passworddiv"),
                                    field: document.querySelector("#password"),
                                    errMsgContainer: document.querySelector("#passwordErrorMessage"),
                                    errMsg: document.querySelector("#passwordErrorMessage .emptyError")
                                },
                                o = {
                                    container: document.querySelector("#pinSection") || document.querySelector(".splitPhoneSection"),
                                    field: document.querySelector("#phoneCode")
                                },
                                u = {
                                    container: document.querySelector("#login_phonediv"),
                                    field: document.querySelector("#phone"),
                                    errMsgContainer: document.querySelector("#phoneErrorMessage"),
                                    errMsg: document.querySelector("#phoneErrorMessage .emptyError"),
                                    invalidMsg: document.querySelector("#phoneErrorMessage .invalidError")
                                },
                                a = {
                                    container: document.querySelector("#login_pindiv"),
                                    field: document.querySelector("#pin"),
                                    errMsgContainer: document.querySelector("#pinErrorMessage"),
                                    errMsg: document.querySelector("#pinErrorMessage .emptyError")
                                },
                                f = document.querySelector("input[name=splitLoginContext]"),
                                n = document.querySelector(".proceed"),
                                l = document.querySelector("#btnNext"),
                                c = document.querySelector("#btnLogin"),
                                h = document.querySelector(".actions"),
                                p = document.querySelector("#splitEmailSection") || document.querySelector("#passwordSection"),
                                d = document.querySelector("#splitPhoneSection") || document.querySelector("#pinSection"),
                                v = document.querySelector("#splitPassword") || document.querySelector("#splitPinSection") || document.querySelector("#pinSection"),
                                m = document.querySelector(".email"),
                                g = document.querySelector(".phone"),
                                y = document.querySelector("#loginWithPhoneOption"),
                                b = document.querySelector("#switchToPhone"),
                                w = document.querySelector("#loginWithEmailOption"),
                                E = document.querySelector("#switchToEmail"),
                                S = document.querySelector(".countryPhoneSelectWrapper"),
                                x = document.querySelector("#emailPageSwitch"),
                                T = document.querySelector(".educationMessage"),
                                N = document.querySelector("#emailSubTagLine"),
                                C = document.querySelector("#phoneSubTagLine"),
                                k = document.querySelector(".forgotLink"),
                                L = k && k.querySelectorAll(".pwrLink"),
                                A = k && k.querySelector("#pwdIframe"),
                                O = document.querySelector("#moreOptionsMobile"),
                                M = document.querySelector("#moreOptionsDropDown"),
                                _ = document.querySelector("#tpdButton"),
                                D = login.utils.isHybridLoginExperience(),
                                P = login.utils.isHybridEditableOnCookied(),
                                H = document.querySelector("#tpdDemo"),
                                B = document.querySelector('input[name="ctxId"]');
                            D && addEvent(i.field, "keyup", function(e) {
                                var t = getEventTarget(e);
                                if (!t) return;
                                q(t.value)
                            }), login.pubsub && (login.pubsub.subscribe("WINDOW_CLICK", j), login.pubsub.subscribe("WINDOW_CLICK", F));
                            var U = document.querySelector("#createAccount");
                            U && (U.onclick = function(e) {
                                var t = login.logger.getStateName();
                                login.utils.getOutboundLinksHandler(U, t, "process_signup")(e)
                            });
                            var z = document.querySelector("#backToInputEmailLink"),
                                W = document.querySelector("#backToEmailPasswordLink"),
                                X = document.querySelector("#rememberProfileEmail"),
                                V = /^\s+|\s+$/,
                                J = /^\S+@\S+\.\S+$/,
                                K = /[^\d]+/g,
                                Q = /\s/g,
                                G = /[-().\s]/ig,
                                Y = !1,
                                Z = document.querySelector("form[name=smartlockForm]"),
                                et = document.querySelector("#secondaryLoginBtn"),
                                tt = $("body").data("phonePasswordEnabled"),
                                nt = $("body").data("phonePinEnabled"),
                                rt = Ht();
                            i.field && (i.field.onkeyup = _t.bind(null, i), i.field.onblur = Dt.bind(null, i), i.field.onfocus = Pt.bind(null, i)), s.field && (s.field.onkeyup = _t.bind(null, s), s.field.onblur = Dt.bind(null, s), s.field.onfocus = Pt.bind(null, s)), u.field && (u.field.onkeyup = _t.bind(null, u), u.field.onblur = Dt.bind(null, u), u.field.onfocus = Pt.bind(null, u)), a.field && (a.field.onkeyup = _t.bind(null, a), a.field.onblur = Dt.bind(null, a), a.field.onfocus = Pt.bind(null, a)), o && o.field && (o.field.onchange = Et, D && (o.field.onclick = St)), It(), Rt(), m && g ? (m.onclick = bt, g.onclick = wt) : m && (m.onclick = Nt), tt && b && (b.onclick = xt), tt && E && (E.onclick = Tt), addEvent(S, "focusin", function(e) {
                                $(S).addClass("focus")
                            }), addEvent(S, "focusout", function(e) {
                                $(S).removeClass("focus")
                            }), x && addEvent(x, "click", function(e) {
                                var t = document.querySelector("input[name=forcePhonePasswordOptIn]");
                                eventPreventDefault(e), Nt(e, function() {
                                    t.value = "true"
                                })
                            }), addEvent(n, "keydown", function(e) {
                                var t = getEventTarget(e);
                                isEnterKeyPressed(e) && !t.href && Ct(e)
                            }), addEvent(n, "submit", Ct), O && addEvent(O, "click", Ut), _ && addEvent(_, "click", Ut), z && addEvent(z, "click", function(e) {
                                zt(e), D && R()
                            }), W && addEvent(W, "click", function(e) {
                                e.preventDefault(), r ? bt() : zt(e)
                            }), X && (X.onclick = Ft), login.pubsub && login.pubsub.subscribe("WINDOW_CLICK", qt)
                        }
                    }(), login.oneTouchLogin = function() {
                        function o() {
                            var t = [],
                                r = document.querySelector('input[name="locale.x"]');
                            t.push({
                                evt: "state_name",
                                data: "Login_UL_RM",
                                instrument: !0
                            }), t.push({
                                evt: "transition_name",
                                data: "prepare_login_UL_RM",
                                instrument: !0
                            }), t.push({
                                evt: "design",
                                data: e.isInContextIntegration() ? "in-context" : "full-context",
                                instrument: !0
                            }), r && t.push({
                                evt: "page_lang",
                                data: r.value,
                                instrument: !0
                            }), t.push({
                                evt: i,
                                data: "PREPARE_PAGE_" + s.toUpperCase(),
                                calEvent: !0
                            }), n.clientLog(t, null)
                        }

                        function u(e, t) {
                            var n = document.querySelector(".notifications"),
                                r, i;
                            n && (r = document.createElement("p"), i = document.createTextNode(e), r.setAttribute("class", "notification " + t), r.setAttribute("role", "alert"), r.appendChild(i), n.appendChild(r))
                        }

                        function a() {
                            var n = document.querySelectorAll("form[name=login] input[type=hidden]"),
                                r = document.querySelector("input[name=login_email]"),
                                i = $("body").data("oneTouchUser"),
                                s = login.utils.getIntent(),
                                a = $("body").data("cookieBannerEnabled"),
                                f = {
                                    _csrf: 1,
                                    intent: 1,
                                    flowId: 1,
                                    ctxId: 1,
                                    returnUri: 1,
                                    state: 1,
                                    "locale.x": 1
                                },
                                l = {};
                            for (var c = 0; c < n.length; c++) f[n[c].name] && (l[n[c].name] = n[c].value);
                            if (!l.intent || s !== "prox" && !l.returnUri || !i) {
                                e.hideSpinner(), autoLoginfallBackClientLog();
                                return
                            }
                            l.otLoginIntent = l.intent, l.login_email = r && r.value, e.showSpinner(), e.showSpinnerMessage("secureMessage"), e.showSpinnerMessage("oneTouchMessage"), o(), $.ajax({
                                url: "/signin/ot-token",
                                method: "POST",
                                data: l,
                                success: function(n) {
                                    var r;
                                    if (n.smartlockOptIn && login.smartLock) {
                                        login.smartLock(n);
                                        return
                                    }
                                    if (n.returnUrl) {
                                        window.location.href = n.returnUrl;
                                        return
                                    }
                                    r = n.notifications, r && u(r.msg, r.type), e.hideSpinner(), e.hideSpinnerMessage("secureMessage"), e.hideSpinnerMessage("oneTouchMessage"), autoLoginfallBackClientLog({
                                        error_code: "ot_login_failed"
                                    }), a && t && t.showCookieBanner()
                                },
                                fail: function(n) {
                                    e.hideSpinner(), e.hideSpinnerMessage("secureMessage"), e.hideSpinnerMessage("oneTouchMessage"), autoLoginfallBackClientLog({
                                        error_code: "ot_login_xhr_fail"
                                    }), a && t && t.showCookieBanner()
                                }
                            })
                        }
                        var e = login.utils,
                            t = login.loadResources,
                            n = login.logger,
                            r = window.PAYPAL.ulData || {},
                            i = "ONETOUCH_LOGIN",
                            s = e.getIntent();
                        return function() {
                            var n = $("body").data("oneTouchUser"),
                                i = $("body").data("tpdAutoSend"),
                                s = r.aPayAuth;
                            if (!s && n) {
                                a();
                                return
                            }
                            if (s && r.canNotMakePayment) {
                                a();
                                return
                            }!i && !isAPaySupported() && !n && e.hideSpinner()
                        }
                    }(), login.showHidePassword = function() {
                        function e(e, t) {
                            function s() {
                                $(n).addClass("hide"), $(r).addClass("hide")
                            }

                            function o(e) {
                                t === "tel" ? $(i).removeClass("tel-password") : i.setAttribute("type", t), $(n).addClass("hide"), $(r).removeClass("hide"), i.focus(), e.stopPropagation(), login.logger.log({
                                    evt: "is_pwd_sh",
                                    data: "Y",
                                    instrument: !0
                                }), login.logger.pushLogs()
                            }

                            function u(e) {
                                t === "tel" ? $(i).addClass("tel-password") : i.setAttribute("type", "password"), $(n).removeClass("hide"), $(r).addClass("hide"), i.focus(), e.stopPropagation(), login.logger.log({
                                    evt: "is_pwd_sh",
                                    data: "N",
                                    instrument: !0
                                }), login.logger.pushLogs()
                            }

                            function a(e) {
                                s();
                                if (login.utils.isFieldPrefilled(i) || i.value.length > 0) t === "text" ? i.getAttribute("type") === "password" ? $(n).removeClass("hide") : $(r).removeClass("hide") : $(i).hasClass("tel-password") ? $(n).removeClass("hide") : $(r).removeClass("hide");
                                e.stopPropagation()
                            }
                            var n = e.querySelector(".showPassword"),
                                r = e.querySelector(".hidePassword"),
                                i = e.querySelector(".pin-password");
                            t = t || "text", t === "tel" && $(i).addClass("tel-password"), n.onclick = o, r.onclick = u, i.onfocus = a, addEvent(i, "keyup", a), i.onclick = function(e) {
                                e.stopPropagation()
                            }, window.onclick = s
                        }
                        return function() {
                            var n = $(document.body).data("showHidePassword"),
                                r = document.querySelector("#signUpSection"),
                                i = document.querySelector("#passwordSection"),
                                s = document.querySelector("#pinSection") || document.querySelector("#splitPinSection"),
                                o;
                            s && (o = s.querySelector(".pin-password"));
                            if (!n) {
                                o && $(o).addClass("tel-password");
                                return
                            }
                            r && e(r), i && e(i), s && o && e(s, o.getAttribute("type") === "tel" ? "tel" : "text")
                        }
                    }(), login.oneTouch = function() {
                        return function() {
                            var t = document.querySelector(".keepMeLoginAbout"),
                                n = document.getElementById("keepMeLoginTerms"),
                                r = document.querySelector(".keepMeLogin .tagLine"),
                                i = login.utils.getKmliCb(),
                                s = "scTrack:unifiedlogin-rememberme-about-open",
                                o = "scTrack:unifiedlogin-rememberme-about-close",
                                u = "scTrack:unifiedlogin-rememberme-opt-in",
                                a = "scTrack:unifiedlogin-rememberme-opt-out";
                            if (!i || !t || !n) return;
                            t.setAttribute("href", "#"), t.onclick = function() {
                                $(n).hasClass("slideUp") ? ($(n).removeClass("slideUp"), $(n).addClass("slideDown"), $(t).attr("aria-expanded", "true"), setTimeout(function() {
                                    $(t).removeClass(s), $(t).addClass(o)
                                }, 10)) : ($(n).removeClass("slideDown"), $(n).addClass("slideUp"), $(t).attr("aria-expanded", "false"), setTimeout(function() {
                                    $(t).removeClass(o), $(t).addClass(s)
                                }, 10)), t.focus(), r && $(r).toggle(), setTimeout(function() {
                                    window.dispatchEvent && window.dispatchEvent(createNewEvent("resize"))
                                }, 200)
                            }, i.onclick = function() {
                                setTimeout(function() {
                                    $(i).hasClass(u) ? ($(i).removeClass(u), $(i).addClass(a)) : ($(i).removeClass(a), $(i).addClass(u))
                                }, 10)
                            }
                        }
                    }(), login.footer = function() {
                        function n() {
                            var e = document.querySelector(".footer"),
                                t = document.querySelector(".activeContent"),
                                n = document.querySelector("#returnToMerchant"),
                                r, i, s = n && $(n).outerHeight() || 0;
                            r = $(t).outerHeight() + $(e).outerHeight() + s, i = window.innerHeight || document.documentElement && document.documentElement.clientHeight || window.screen && window.screen.height || document.height || document.body && document.body.offsetHeight, i < r ? $(e).addClass("footerStayPut") : $(e).removeClass("footerStayPut")
                        }
                        var e = document.querySelectorAll(".localeSelector li a");
                        for (var t = 0; t < e.length; t++) e[t].onclick = login.utils.getOutboundLinksHandler(e[t], null, "process_language_change");
                        return function() {
                            n(), addEvent(window, "resize", n)
                        }
                    }(), login.pwr = function() {
                        return function() {
                            function o(e) {
                                e.preventDefault(), s = document.createElement("div"), s.className = "modal-underlay", document.body.appendChild(s), n.style.display = "block", setTimeout(function() {
                                    s.style.opacity = .7, n.style.opacity = 1
                                }, 0), r.setAttribute("src", $(r).data("src")), r.focus(), r.onload = function() {
                                    a(), r.focus()
                                }, login.logger.log({
                                    evt: "state_name",
                                    data: login.logger.getStateName(),
                                    instrument: !0
                                }), login.logger.log({
                                    evt: "transition_name",
                                    data: "process_password_recovery",
                                    instrument: !0
                                }), login.logger.pushLogs()
                            }

                            function u() {
                                var e = document.querySelector(".modal-underlay");
                                document.body.removeChild(e), n.style.display = "none", r.setAttribute("src", "about:blank"), t && t.length > 0 && t[1].focus()
                            }

                            function a() {
                                var e = window.innerHeight || document.documentElement.clientHeight;
                                e <= n.clientHeight ? (n.style.transform = "translate(-50%, 0%)", n.style.top = 0) : (n.style.transform = "translate(-50%, -50%)", n.style.top = "50%")
                            }
                            var t = document.querySelectorAll(".startPwrFlowBtn"),
                                n = document.getElementById("password-recovery-modal"),
                                r = document.getElementById("pwdIframe"),
                                i, s;
                            r && login.utils.isInIframe() && r.setAttribute("target", "_blank");
                            if (t && t.length > 0 && !login.utils.isInIframe()) {
                                i = document.createElement("button"), i.className = "ui-dialog-titlebar-close", i.setAttribute("type", "button"), i.setAttribute("alt", "Close"), i.setAttribute("aria-label", "Close"), n.appendChild(i);
                                for (var f = 0; f < t.length; f++) addEvent(t[f], "click", o);
                                i.onclick = u, addEvent(r, "focusout", function(e) {
                                    e.preventDefault(), i.focus()
                                }), i.onkeydown = function(e) {
                                    e.which === 9 && r.focus()
                                }, addEvent(window, "resize", a)
                            }
                        }
                    }(), login.authCaptcha = function() {
                        return function(t) {
                            function a(e) {
                                e.preventDefault(), e.stopPropagation(), $.ajax({
                                    method: "GET",
                                    url: "/auth/refreshcaptcha",
                                    success: function(e) {
                                        e !== "undefined" && ($(".captcha-container img").attr("src", e.captchaImgUrl), $(".captcha-container .audio a").attr("href", e.captchaAudioUrl), $(".captcha-container input").val(""), $("#captchaPlayer").attr("src", e.captchaAudioUrl), $("body").hasClass("desktop") && $(".captcha-container input").focus())
                                    }
                                })
                            }

                            function f(e) {
                                var t = document.getElementById("captchaPlayer"),
                                    n = !!t.canPlayType && !!t.canPlayType("audio/mpeg;").replace(/no/, "");
                                if (!n) return !0;
                                e.preventDefault(), $(".captcha-container input").focus(), t.play()
                            }

                            function l(e) {
                                $(e.container).addClass("hasError"), e.container.style["z-index"] = 100, $(e.errMsgContainer).addClass("show"), e.field.focus()
                            }

                            function c(e) {
                                $(e.errMsg).removeClass("hide")
                            }

                            function h(e) {
                                $(e.errMsg).addClass("hide")
                            }

                            function p(e) {
                                return e.field && typeof e.field.value == "string" && !e.field.value.trim() ? (l(e), c(e), !1) : !0
                            }

                            function d(e) {
                                var n = !0;
                                return e && e.field && !t && (n = p(e)), n
                            }

                            function v(e) {
                                return e ? {
                                    container: e.querySelector("div.textInput"),
                                    field: e.querySelector("input[type=text]"),
                                    errMsgContainer: e.querySelector("div.errorMessage"),
                                    errMsg: e.querySelector("div.errorMessage .emptyError")
                                } : null
                            }

                            function m(e) {
                                var t = d(o),
                                    n = document.querySelector("form[name=challenge]"),
                                    r = {};
                                u = !0, e && eventPreventDefault(e);
                                if (!t) return;
                                login.utils.showSpinner();
                                for (var i = 0; i < n.length; i++) r[n[i].name] = n[i].value;
                                $.ajax({
                                    url: s.getAttribute("action"),
                                    data: r,
                                    success: login.utils.successfulXhrHandler,
                                    fail: login.utils.failedXhrSubmitHandler
                                })
                            }

                            function g(e) {
                                $(e.container).hasClass("hasError") ? u = !0 : u = !1
                            }

                            function y(e, t) {
                                t && $(e.container).removeClass("hasError"), e.container.style["z-index"] = 1, $(e.errMsgContainer).removeClass("show")
                            }

                            function b(e) {
                                u = !1, y(e)
                            }

                            function w(e) {
                                var t = e.field.value.trim();
                                if (!u) return !1;
                                t === "" ? c(e) : (h(e), y(e, !0))
                            }
                            var n = document.querySelector(".captchaRefresh"),
                                r = document.querySelector(".captchaPlay"),
                                i = document.querySelector("#captcha"),
                                s = document.querySelector("#ads-container form"),
                                o = v(i),
                                u = !1;
                            if (t) {
                                m();
                                return
                            }
                            n.onclick = a, r.onclick = f, s.onsubmit = m, o.field.onfocus = g.bind(null, o), o.field.onblur = b.bind(null, o), o.field.onkeyup = w.bind(null, o)
                        }
                    }(), login.ads = function() {
                        function init(e) {
                            var t, n = e || $("body").data("adsChallengeUrl");
                            $.ajax({
                                url: n,
                                method: "GET",
                                success: function(e) {
                                    t = document.createElement("script"), t.id = "ads", t.type = "text/javascript", t.setAttribute("nonce", $("body").data("nonce")), t.text = e.replace(/<\/?(html|body|script)>/g, ""), document.body.appendChild(t)
                                },
                                fail: function(e) {}
                            })
                        }

                        function handleAdsInterception(htmlResponse) {
                            var isAutoSubmit = !0,
                                adsContainerId = "ads-container",
                                adsContainerDiv, scriptNodes, adsCaptchaType;
                            document.getElementById("ads-container") && document.getElementById("ads-container").parentNode.removeChild(document.getElementById("ads-container")), adsContainerDiv = document.createElement("div"), adsContainerDiv.setAttribute("id", adsContainerId), adsContainerDiv.innerHTML = htmlResponse, $("#main").append(adsContainerDiv), scriptNodes = adsContainerDiv.getElementsByTagName("script");
                            for (var i = 0; i < scriptNodes.length; i++) eval.call(this, scriptNodes[i].innerHTML);
                            typeof autosubmit != "undefined" && (isAutoSubmit = autosubmit), typeof captchatype != "undefined" && (adsCaptchaType = captchatype), isAutoSubmit ? document.getElementById("ads-container").style.display = "none" : $("#login").addClass("hide"), typeof login.authCaptcha == "function" && login.authCaptcha(isAutoSubmit), isAutoSubmit || (login.utils.hideSpinner(), login.utils.hideSpinnerMessage()), login.logger.log({
                                evt: "ads_state_name",
                                data: isAutoSubmit ? "pre_jschallenge_served" : adsCaptchaType,
                                instrument: !0
                            }), login.logger.pushLogs()
                        }
                        return {
                            init: init,
                            handleAdsInterception: handleAdsInterception
                        }
                    }(), login.tpdLogin = function() {
                        function n(e) {
                            var t = {};
                            if (!e) return;
                            login.logger.log({
                                evt: "state_name",
                                data: e.stateName,
                                instrument: !0
                            }), login.logger.log({
                                evt: "transition_name",
                                data: e.transitionName,
                                instrument: !0
                            }), e.calName && login.logger.log({
                                evt: "TPD_CLIENT",
                                data: e.calName,
                                calEvent: !0
                            }), login.logger.pushLogs()
                        }

                        function r() {
                            n({
                                stateName: "begin_tpd",
                                transitionName: "prepare_verification"
                            })
                        }

                        function i(e) {
                            n({
                                stateName: "begin_pwd",
                                transitionName: "process_pwd_tpd_click",
                                calName: "INIT_TPD" + (e && "_" + e)
                            })
                        }

                        function s() {
                            n({
                                stateName: "begin_tpd",
                                transitionName: "process_pwd_tpd_auto",
                                calName: "AUTO_TPD_LOGIN"
                            })
                        }

                        function o() {
                            n({
                                stateName: "begin_tpd",
                                transitionName: "process_not_you",
                                calName: "PROCESS_NOT_YOU"
                            })
                        }

                        function u() {
                            n({
                                stateName: "begin_tpd",
                                transitionName: "process_resend",
                                calName: "PROCESS_RESEND"
                            })
                        }

                        function a(e) {
                            switch (e) {
                                case "passwordReason1":
                                    n({
                                        stateName: "begin_use_pwd",
                                        transitionName: "process_no_phone",
                                        calName: "USE_PASSWORD_NO_PHONE"
                                    });
                                    break;
                                case "passwordReason2":
                                    n({
                                        stateName: "begin_use_pwd",
                                        transitionName: "process_no_notification",
                                        calName: "USE_PASSWORD_NO_NOTIFICATION"
                                    });
                                    break;
                                case "passwordReason3":
                                    n({
                                        stateName: "begin_use_pwd",
                                        transitionName: "process_prefer_password",
                                        calName: "USE_PASSWORD_PREFER_PASSWORD"
                                    });
                                    break;
                                case "passwordReason4":
                                    n({
                                        stateName: "begin_use_pwd",
                                        transitionName: "process_try_later",
                                        calName: "USE_PASSWORD_TRY_LATER"
                                    });
                                    break;
                                case "passwordReason5":
                                    n({
                                        stateName: "begin_use_pwd",
                                        transitionName: "process_other",
                                        calName: "USE_PASSWORD_OTHER"
                                    });
                                    break;
                                default:
                                    n({
                                        stateName: "begin_tpd",
                                        transitionName: "process_use_pwd",
                                        calName: "USE_PASSWORD"
                                    })
                            }
                        }

                        function f(e) {
                            n({
                                stateName: "end_tpd_notification",
                                transitionName: "expired_tpd_no_action",
                                calName: "EXPIRED_TPD_" + e
                            })
                        }

                        function l(n) {
                            var r = document.querySelectorAll("form[name=login] input"),
                                i = {},
                                s = $("body").data("tpdVariant");
                            $("body").data("isPrefillEmailEnabled") && $("body").data("tpdDemo") && document.body.removeAttribute("data-is-prefill-email-enabled"), e.showSpinner();
                            for (var o = 0; o < r.length; o++) i[r[o].name] = r[o].value;
                            if (i.tpdEligible !== "true") {
                                e.hideSpinner();
                                return
                            }
                            i.splitLoginContext = "tpd", delete i.login_password, delete i.login_pin, i.tpdVariant = n, i.originalVariant = s, login.fn.addFnSyncData(), $.ajax({
                                url: t.getAttribute("action"),
                                method: "POST",
                                data: i,
                                success: e.successfulXhrHandler,
                                fail: e.failedXhrSubmitHandler
                            })
                        }

                        function c() {
                            var e = $("body").data("tpdAutoSend");
                            if (login.utils.isTpdDemo()) return;
                            e === "true" && (s(), l("autoSend"))
                        }
                        var e = login.utils,
                            t = document.querySelector("form[name=login]");
                        return {
                            instrumentVerificationViewRendered: r,
                            instrumentTpdLoginClicked: i,
                            instrumentTpdLoginAutoTriggered: s,
                            instrumentNotYouClicked: o,
                            instrumentResendClicked: u,
                            instrumentUsePasswordInstead: a,
                            initialize: c,
                            attemptTpdLogin: l,
                            instrumentTpdExpired: f
                        }
                    }(), login.singleSignOn = function() {
                        function r() {
                            var r = {},
                                i = document.querySelectorAll("form[name=login] input[type=hidden]");
                            t && (e.showSpinner(), $(n).addClass("nonTransparentMask"), e.showSpinnerMessage("oneSecond"), r.ssoViaToken = !0, login.fn.updateFnSyncContext({
                                sourceId: "SSO_LOGIN"
                            }), login.fn.addFnSyncData());
                            var s = {
                                _csrf: 1,
                                intent: 1,
                                ctxId: 1,
                                returnUri: 1,
                                state: 1,
                                authContextId: 1,
                                authCode: 1,
                                "locale.x": 1,
                                fn_sync_data: 1
                            };
                            for (var o = 0; o < i.length; o++) s[i[o].name] && (r[i[o].name] = i[o].value);
                            login.logger.log({
                                evt: "state_name",
                                data: "sso_login",
                                instrument: !0
                            }), login.logger.log({
                                evt: "transition_name",
                                data: "prepare_sso_login",
                                instrument: !0
                            }), login.logger.pushLogs(), $.ajax({
                                url: "/signin/sso",
                                method: "POST",
                                data: r,
                                success: function(t) {
                                    login.logger.log({
                                        evt: "state_name",
                                        data: "sso_login",
                                        instrument: !0
                                    }), login.logger.log({
                                        evt: "transition_name",
                                        data: "process_sso_login",
                                        instrument: !0
                                    }), login.logger.pushLogs();
                                    if (t.returnUrl) {
                                        window.location.href = t.returnUrl;
                                        return
                                    }
                                    t.notifications && login.utils.updatePageLevelError(t.notifications.msg, t.notifications.type), e.hideSpinner(), e.hideSpinnerMessage("oneSecond"), e.hideSpinnerMessage("secureMessage")
                                },
                                fail: function(t) {
                                    e.hideSpinner(), e.hideSpinnerMessage("oneSecond"), e.hideSpinnerMessage("secureMessage")
                                }
                            })
                        }
                        var e = login.utils,
                            t = $("body").data("ssoviatoken"),
                            n = document.querySelector(".transitioning");
                        return function() {
                            if (t) {
                                login.fn.initialize(), r();
                                return
                            }
                        }
                    }(), login.smartLock = function() {
                        function S(t) {
                            var n = {};
                            if (!t) return;
                            login.logger.log({
                                evt: "state_name",
                                data: t.stateName,
                                instrument: !0
                            }), login.logger.log({
                                evt: "transition_name",
                                data: t.transitionName,
                                instrument: !0
                            }), login.logger.log({
                                evt: "api_name",
                                data: t.apiName,
                                instrument: !0
                            }), t.errorCode && login.logger.log({
                                evt: "ext_error_code",
                                data: t.errorCode,
                                instrument: !0
                            }), t.calName && login.logger.log({
                                evt: "CROSS_DEVICE_OT_CLIENT",
                                data: t.calName + "_" + a,
                                calEvent: !0
                            }), t.respDuration && login.logger.log({
                                evt: "resp_duration",
                                data: t.respDuration,
                                instrument: !0
                            }), t.updateCapping && (n.data = {
                                updateCapping: t.updateCapping
                            }), t.resetCapping && (n.data = n.data || {}, n.data.resetCapping = t.resetCapping), t.googleSessionExists && login.logger.log({
                                evt: "google_session_exists",
                                data: t.googleSessionExists,
                                instrument: !0
                            }), t.redirectOnComplete && (n.complete = function() {
                                login.utils.showSpinner(), window.location.href = e.slReturnUrl || ""
                            }), t.emailPrefill && login.logger.log({
                                evt: "email_prefill",
                                data: t.emailPrefill,
                                instrument: !0
                            }), login.logger.pushLogs(n)
                        }

                        function x() {
                            return $(t).hasClass("mobile")
                        }

                        function T() {
                            return Date.now ? Date.now() : (new Date).getTime()
                        }

                        function N(e) {
                            var t = document.querySelector(".modal-underlay");
                            x() && (e.style.width = "100%", e.style.height = "100%"), t || (t = document.createElement("div"), t.className = "modal-underlay", document.body.appendChild(t)), e.style.display = "block", t.style.opacity = .7, e.style.opacity = 1, login.logger.log({
                                evt: "CROSS_DEVICE_OT_CLIENT",
                                data: "LEARN_MORE_" + a,
                                calEvent: !0
                            })
                        }

                        function C(e) {
                            var t = document.querySelector(".modal-underlay");
                            t && document.body.removeChild(t), e.style.display = "none"
                        }

                        function k(e) {
                            F("isPrefillEmailEnabled", !1, h), F("nextClick", !1, h), f = f && $(f).remove();
                            if (e && e.target && e.target.id === "backToInputEmailLink") return;
                            login.logger.log({
                                evt: "CROSS_DEVICE_OT_CLIENT",
                                data: "CHANGE_" + a,
                                calEvent: !0
                            }), login.logger.log({
                                evt: "clicked_not_you",
                                data: "y",
                                instrument: !0
                            }), login.utils.notYouClickHandler(e, function() {
                                i && ($(i).addClass("hide"), $(i).removeClass("activeContent")), o && ($(o).removeClass("hide"), $(o).addClass("activeContent"))
                            })
                        }

                        function L(e, t, n) {
                            var r = document.querySelector(".transitioning p.oneSecond"),
                                i = {};
                            e = e || {}, e.data && (i = e.data), i._csrf = login.utils.getCSRFToken(), login.utils.showSpinner(), r && $(r).removeClass("hide"), $.ajax({
                                type: e.method || "POST",
                                url: "/signin/" + e.path,
                                data: i,
                                dataType: "json",
                                success: function(e) {
                                    return login.utils.setCSRFToken(e && e._csrf), t(e)
                                },
                                fail: n
                            })
                        }

                        function A(e) {
                            i && ($(i).addClass("hide"), $(i).removeClass("activeContent")), o && ($(o).removeClass("hide"), $(u).addClass("activeContent")), f = f && $(f).remove();
                            if (!E) {
                                triggerEvent(window, "resize"), login.utils.hideSpinnerMessage("retrieveInfo"), login.utils.hideSpinnerMessage("waitFewSecs"), login.utils.hideSpinner(), login.fn.updateFnSyncContext({
                                    sourceId: "UL_CHECKOUT_INPUT_PASSWORD"
                                }), S({
                                    stateName: "switch_to_pwd",
                                    transitionName: "process_switch_to_pwd",
                                    calName: "PWD_FALLBACK_" + login.utils.getIntent(),
                                    errorCode: e
                                });
                                return
                            }
                            login.utils.renderPasswordFromPrefillHybridView(), F("isPrefillEmailEnabled", !1, h)
                        }

                        function O(t, n) {
                            var r = document.querySelector("input[name=ctxId]");
                            L({
                                path: "smart-lock-handler",
                                data: {
                                    smartLockIdToken: t,
                                    nonce: g || "",
                                    actionIntent: n,
                                    returnUrl: e.slReturnUrl,
                                    slSessionExists: e.slSessionExists,
                                    scimContextId: e.scimContextId || "",
                                    intent: login.utils.getIntent(),
                                    ctxId: r && r.value,
                                    flowId: login.utils.getFlowId()
                                }
                            }, function(t) {
                                if (t.returnUrl) {
                                    window.location.href = t.returnUrl;
                                    return
                                }
                                if (n === "optin") {
                                    window.location.href = e.slReturnUrl;
                                    return
                                }
                                login.logger.log({
                                    evt: "CROSS_DEVICE_OT_CLIENT",
                                    data: "ACTIVATION_FAILED_LOGIN_FALLBACK_" + a,
                                    calEvent: !0
                                }), A("activation failed - prompt pwd");
                                return
                            }, function(t) {
                                if (n === "optin") {
                                    window.location.href = e.slReturnUrl;
                                    return
                                }
                                login.logger.log({
                                    evt: "CROSS_DEVICE_OT_CLIENT",
                                    data: "ACTIVATION_ERROR_LOGIN_FALLBACK_" + a,
                                    calEvent: !0
                                }), A("activation error");
                                return
                            })
                        }

                        function M() {
                            return login.utils.showSpinner(), S({
                                stateName: "begin_sl_activation",
                                transitionName: "process_sl_activation_continue",
                                calName: "ACTIVATE_INITIATED"
                            }), O(m, "activation")
                        }

                        function _() {
                            var t = ["intent", "ctxId", "_csrf", "locale.x", "flowId", "returnUri", "state", "fn_sync_data"],
                                n, r = {},
                                i = e.slTokenValidationTimeout || "3000";
                            d = T(), login.utils.hideSpinnerMessage("retrieveInfo"), E ? login.utils.hideSpinner() : (login.utils.showSpinnerMessage("waitFewSecs"), v = setTimeout(function() {
                                login.logger.log({
                                    evt: "CROSS_DEVICE_OT_CLIENT",
                                    data: "PARTNER_AUTH_TIMEOUT_" + a,
                                    calEvent: !0
                                }), q("Token validation timeout")
                            }, i)), login.fn.updateFnSyncContext({
                                sourceId: "SL_ACTIVATION"
                            }), login.fn.addFnSyncData();
                            for (var s = 0; s < t.length; s++) n = h.querySelector('input[name="' + t[s] + '"]'), n && (r[t[s]] = n.value);
                            r.smartLockIdToken = m, $.ajax({
                                url: "/signin/validate-partner-token",
                                method: "POST",
                                data: r,
                                success: function(e) {
                                    var t = d ? T() - d : 0;
                                    b = e.showActivation, w = t, y = e.nonce, E || D()
                                },
                                fail: function(e) {
                                    if (p) return;
                                    clearTimeout(v), login.logger.log({
                                        evt: "CROSS_DEVICE_OT_CLIENT",
                                        data: "PARTNER_AUTH_ERROR_" + a,
                                        calEvent: !0
                                    }), A("partner token validation error")
                                }
                            })
                        }

                        function D() {
                            var e = i.querySelector("#linked"),
                                t = i.querySelector("#unlinked"),
                                n = document.querySelector("#optInLearnMoreDesc");
                            if (p) return;
                            clearTimeout(v), b ? (y && (g = y), o && ($(o).addClass("hide"), $(u).removeClass("activeContent")), i && ($(i).removeClass("hide"), $(s).addClass("activeContent")), e && $(e).removeClass("hide"), n && $(n).addClass("hide"), t && $(t).addClass("hide"), c && $(c).addClass("hide"), login.utils.hideSpinnerMessage("retrieveInfo"), login.utils.hideSpinnerMessage("waitFewSecs"), login.utils.hideSpinner(), S({
                                stateName: "begin_sl_activation",
                                transitionName: "prepare_sl_activation",
                                calName: "ACTIVATION_SHOWN",
                                respDuration: w,
                                updateCapping: "smartlockActivate"
                            })) : (login.logger.log({
                                evt: "CROSS_DEVICE_OT_CLIENT",
                                data: "PARTNER_AUTH_FAILED_" + a,
                                calEvent: !0
                            }), A("partner token invalid"))
                        }

                        function P(t) {
                            var n = i.querySelector("#displayName"),
                                r = i.querySelector("#partnerEmail"),
                                s = i.querySelector("#partnerEmailDomain"),
                                o = i.querySelector("#partnerPhoto"),
                                u = i.querySelector(".loginEmail"),
                                a = d ? T() - d : 0,
                                f = {
                                    stateName: "begin_google_auth",
                                    transitionName: "process_google_auth",
                                    apiName: "google_auth",
                                    respDuration: a
                                };
                            clearTimeout(v);
                            if (!t || t.error || !t.idToken) f.errorCode = t && t.error, f.calName = "AUTH_FAIL", A("auth failed"), f.updateCapping = "smartlockBlockingAuth", S(f);
                            else {
                                f.calName = "AUTH_SUCCESS", u.textContent = e.slLoginEmail, n && (n.textContent = t.name);
                                var l = t.email && t.email.indexOf("@");
                                r && l > 0 && (r.textContent = t.email.slice(0, l), s.textContent = t.email.slice(l)), o && (o.style.backgroundImage = "url(" + t.image + ")"), m = t.idToken, S(f), _()
                            }
                        }

                        function H(e) {
                            var t = d ? T() - d : 0,
                                n = {
                                    stateName: "begin_nonblock_google_auth",
                                    transitionName: "process_nonblock_google_auth",
                                    apiName: "google_auth",
                                    respDuration: t
                                };
                            !e || e.error || !e.idToken ? (n.errorCode = e && e.error, n.calName = "NB_AUTH_FAIL") : (n.calName = "NB_AUTH_SUCCESS", n.resetCapping = "smartlockBlockingAuth"), S(n)
                        }

                        function B(e) {
                            var t = d ? T() - d : 0,
                                n = e && e.error === "userCanceled" ? "process_gsl_cancel" : "process_gsl_error",
                                i = e && e.error === "userCanceled" ? "LINK_CANCELLED" : "LINK_ERROR",
                                s = {
                                    stateName: "begin_gsl",
                                    respDuration: t
                                };
                            clearTimeout(v), e.idToken ? (s.transitionName = "process_gsl", s.calName = "LINK_INITIATED_" + login.utils.getIntent(), $(r).addClass("nonTransparentMask"), login.utils.showSpinner(), S(s), O(e.idToken, "optin")) : (s.transitionName = n, s.errorCode = e && e.error, s.redirectOnComplete = !0, s.calName = i, S(s))
                        }

                        function j(t) {
                            var n = d ? T() - d : 0,
                                r = document.querySelector("form[name=login]"),
                                i = t && t.sessionExists,
                                s = {
                                    stateName: "begin_gsl_session_check",
                                    transitionName: "process_gsl_session_check",
                                    apiName: "smartlock_hintsAvailable",
                                    googleSessionExists: i,
                                    calName: "GOOGLE_SESSION_" + i + "_" + login.utils.getIntent(),
                                    respDuration: n
                                };
                            clearTimeout(v), !t || t.error || i !== "true" ? (s.errorCode = t && t.error, s.redirectOnComplete = e.slOptInOT, S(s)) : (F("slSessionExists", t.sessionExists, r), F("partnerClientId", e.partnerClientId, r), F("scimContextId", e.scimContextId, r), S(s), e.slOptInOT && (e.slFrameSrc = e.slFrameSrc && e.slFrameSrc.replace("hintsAvailable", "hint"), e.slOptInOT = !1, J()))
                        }

                        function F(e, t, n) {
                            var r = document.querySelector("[name=" + e + "]");
                            r ? r.setAttribute("value", t) : login.utils.addHiddenElement(e, t, n)
                        }

                        function I(t) {
                            var n = t && t.data || {},
                                r;
                            if (p) return;
                            if (n.type === "verifyPing" && t.source) {
                                t.source.postMessage({
                                    type: "verifyAck",
                                    data: n.data
                                }, "*");
                                return
                            }
                            if (t && t.data) try {
                                r = JSON.parse(t.data)
                            } catch (i) {}
                            if (!r) return;
                            if (r.source === "smartlock" && r.method === "hintsAvailable") return j(r);
                            if (r.source === "smartlock" && r.method === "hint") return B(r);
                            if (r.source === "slAuth" && e.slAction === "nonblockingAuth") return H(r);
                            if (r.source === "slAuth") return P(r)
                        }

                        function q(e) {
                            p = !0, login.logger.log({
                                evt: "CROSS_DEVICE_OT_CLIENT",
                                data: "AUTH_TIMEOUT_" + a,
                                calEvent: !0
                            }), A(e)
                        }

                        function R() {
                            p = !0, S({
                                stateName: "begin_gsl",
                                transitionName: "process_gsl_no_user_action",
                                calName: "OPTIN_ACTION_TIMEOUT_" + login.utils.getIntent(),
                                redirectOnComplete: !0
                            })
                        }

                        function U() {
                            var t = e.slOptInOT ? "returning_ot_session_chk_timeout" : "session_chk_timeout";
                            p = !0, S({
                                stateName: "begin_gsl_session_check",
                                transitionName: "process_gsl_session_check",
                                apiName: "smartlock_hintsAvailable",
                                errorCode: t,
                                calName: "SESSION_CHK_TIMEOUT_" + login.utils.getIntent(),
                                redirectOnComplete: e.slOptInOT
                            })
                        }

                        function z(t, n) {
                            function s(e) {
                                f.contentWindow.postMessage(JSON.stringify({
                                    source: "UL",
                                    email: r,
                                    clientId: i,
                                    authIntent: "authorize"
                                }), "*")
                            }
                            var r = e.slLinkedEmail,
                                i = e.partnerClientId;
                            d = T(), $(o).removeClass("hide"), S({
                                stateName: n.stateName,
                                transitionName: n.transitionName,
                                apiName: "google_auth",
                                emailPrefill: n.emailPrefill
                            }), f ? f.src = t : (f = login.utils.createIframe({
                                id: "slAuthFrame",
                                src: t,
                                frameBorder: "0",
                                sandbox: "allow-same-origin allow-scripts",
                                style: "width:0;height:0"
                            }), addEvent(f, "load", s))
                        }

                        function W() {
                            var t = e.slAuthUrl,
                                n = e.slAuthChkTimeout || "3000";
                            d = T(), login.utils.showSpinner(), login.utils.showSpinnerMessage("retrieveInfo"), $(o).removeClass("hide");
                            if (!t) return A("Auth URL not found");
                            E ? (login.utils.hidePasswordForPrefillHybrid(), F("isPrefillEmailEnabled", E, h), login.utils.hideSpinner()) : v = setTimeout(function() {
                                q("Auth Timeout")
                            }, n), z(t, {
                                stateName: "begin_google_auth",
                                transitionName: "prepare_google_auth",
                                emailPrefill: E ? "Y" : "N"
                            })
                        }

                        function X() {
                            var t = e.slAuthUrl;
                            d = T(), A("Perform non blockingAuth");
                            if (!t) return;
                            z(t, {
                                stateName: "begin_nonblock_google_auth",
                                transitionName: "prepare_nonblock_google_auth"
                            })
                        }

                        function V(t) {
                            var n = e.slFrameSrc,
                                r = "";
                            t && (r = x() ? "popupMobile" : "popupWeb"), l ? l.src = n : login.utils.createIframe({
                                id: "slFrame",
                                src: n,
                                frameBorder: "0",
                                className: r,
                                sandbox: "allow-same-origin allow-scripts"
                            })
                        }

                        function J() {
                            var t = e.slFrameSrc,
                                n = i.querySelector(".cancelUrl"),
                                r = e.slOptInTimeout || "30000",
                                a, f = i.querySelector("#linked"),
                                h = i.querySelector("#unlinked"),
                                p = document.querySelector("#slLoginLearnMoreDesc"),
                                m = i.querySelector("#slOptIn_notNow");
                            d = T();
                            if (e.slOptInOT) return K();
                            n && !e.slDisplayMerchantLink && $(n).addClass("hide"), $(i).removeClass("hide"), $(s).addClass("activeContent"), o && ($(o).addClass("hide"), $(u).removeClass("activeContent")), f && $(f).addClass("hide"), h && $(h).removeClass("hide"), p && $(p).addClass("hide"), c && $(c).addClass("hide"), login.utils.hideSpinner(), S({
                                stateName: "begin_gsl",
                                transitionName: "prepare_gsl",
                                apiName: "smartlock_hint",
                                updateCapping: "smartlockOptIn",
                                calName: "OPTIN_SHOWN_" + login.utils.getIntent()
                            }), triggerEvent(window, "resize"), t ? (v = setTimeout(function() {
                                R()
                            }, r), V(!0), l = document.querySelector("#slFrame"), l && (a = $(l).outerHeight(), document.querySelector("body").style.marginBottom = a + "px"), setTimeout(function() {
                                m && $(m).removeClass("hide")
                            }, "5000")) : (login.utils.showSpinner(), window.location.href = e.slReturnUrl || "")
                        }

                        function K() {
                            var t = e.slFrameSrc,
                                n = e.slSessionChkTimeout || "3000",
                                r = {
                                    stateName: "begin_gsl_session_check",
                                    transitionName: "prepare_gsl_session_check",
                                    apiName: "smartlock_hintsAvailable"
                                };
                            d = T(), t ? (v = setTimeout(function() {
                                U()
                            }, n), V(e.slOptInOT), S(r)) : (r.errorCode = "slFrameSrc not found", r.redirectOnComplete = e.slOptInOT, S(r))
                        }

                        function Q() {
                            var e = document.querySelector("#slLoginLearnMore"),
                                t = document.querySelector("#learnMoreModal"),
                                r = t.querySelector("button"),
                                s = document.querySelector("#slOptInlearnMore"),
                                o = document.querySelector("#learnMoreModal"),
                                u = o.querySelector("button"),
                                f = i && i.querySelector("#continueBtn"),
                                l = i && i.querySelector("#secondaryLoginBtn"),
                                c = document.querySelector("#changeLink"),
                                h = i.querySelector("#slOptIn_notNow a"),
                                p = document.querySelector("#backToInputEmailLink");
                            addEvent(e, "click", function() {
                                N(t)
                            }), addEvent(r, "click", function() {
                                C(t)
                            }), addEvent(s, "click", function() {
                                N(o)
                            }), addEvent(u, "click", function() {
                                C(o)
                            }), addEvent(f, "click", function() {
                                M()
                            }), addEvent(l, "click", function() {
                                login.logger.log({
                                    evt: "CROSS_DEVICE_OT_CLIENT",
                                    data: "USE_PASSWORD_" + a,
                                    calEvent: !0
                                }), A()
                            }), c && addEvent(c, "click", k), p && addEvent(p, "click", k), addEvent(window, "message", I), h && addEvent(h, "click", function() {
                                S({
                                    stateName: "begin_gsl",
                                    transitionName: "process_gsl_not_now",
                                    calName: "OPTIN_ACTION_NOTNOW_" + login.utils.getIntent(),
                                    redirectOnComplete: !0
                                })
                            }), n = !0
                        }
                        var e, t = document.body,
                            n = !1,
                            r = document.querySelector(".transitioning"),
                            i = document.querySelector("#slLanding"),
                            s = i && i.querySelector("#content"),
                            o = document.querySelector("#login"),
                            u = o && o.querySelector("#content"),
                            a = $(t).hasClass("mobile") ? "MOBILE" : "DESKTOP",
                            f = document.querySelector("#slAuthFrame"),
                            l = document.querySelector("#slFrame"),
                            c = i && i.querySelector(".localeSelector"),
                            h = document.querySelector("form[name=login]"),
                            p = !1,
                            d, v, m, g, y, b, w, E;
                        return function(r) {
                            var s = document.querySelector("input[name=nextClick]");
                            e = r ? r : window.PAYPAL && window.PAYPAL.slData, E = r ? r.isPrefillEmailEnabled : login.utils.isPrefillEmailEnabled();
                            if (!e || !e.slAction || !i) return;
                            e.slAction && !n && Q();
                            if (E && s && s.value === "true") return S({
                                stateName: "begin_email",
                                transitionName: "process_next",
                                emailPrefill: E ? "Y" : "N"
                            }), D();
                            if (e.slAction === "activation" && !login.utils.isAPayEnabled(r)) return W();
                            if (e.slAction === "nonblockingAuth") return X();
                            if (e.slAction === "checkSession") return K();
                            if (e.slAction === "optIn") return J()
                        }
                    }();
                var fingerprint = fingerprint || {};
                fingerprint.lookup = function(e) {
                    function n(e) {
                        var t = document.querySelector("form[name=login]"),
                            n = document.createElement("input");
                        n.setAttribute("type", "hidden"), n.setAttribute("name", "availableAAID"), n.setAttribute("value", e), t && t.appendChild(n)
                    }

                    function r(r) {
                        var i, s = [];
                        if (r && r.availableAuthenticators !== null) {
                            i = r.availableAuthenticators;
                            for (var o = 0; o < i.length; o++) s.push(i[o].aaid)
                        }
                        if (typeof e == "function") return e(s);
                        s.length > 0 && (t.availableAuthenticatorsList = s, n(s))
                    }

                    function i(e) {
                        if (typeof e == "function") return e()
                    }
                    var t = window.PAYPAL && window.PAYPAL.ulData || {};
                    t.fingerprintProceed === "lookup" && navigator.uaf && navigator.uaf.discover(r, i)
                }, fingerprint = fingerprint || {}, fingerprint.utils = function() {
                    function t(t, n, r) {
                        var i = {};
                        t = t || {}, t.data && (i = t.data), i._csrf = e.getCSRFToken(), e.showSpinner(), e.showSpinnerMessage("oneSecond"), $.ajax({
                            type: t.method || "POST",
                            url: "/signin" + (t.path || ""),
                            data: i,
                            dataType: "json",
                            success: function(t) {
                                return e.setCSRFToken(t && t._csrf), n(t)
                            },
                            fail: r
                        })
                    }

                    function n(e, t) {
                        e && navigator.uaf.processUAFOperation(e, function(e) {
                            if (typeof t == "function") return t()
                        }, function(e) {
                            if (typeof t == "function") return t()
                        })
                    }

                    function r(e) {
                        e && navigator.uaf.processUAFOperation(e, function(e) {}, function(e) {})
                    }

                    function i(e) {
                        if (e) return {
                            uafProtocolMessage: e,
                            additionalData: null
                        }
                    }

                    function s(t, n) {
                        eventPreventDefault(t), $.ajax({
                            type: "POST",
                            url: "/signin/not-you",
                            data: {
                                _csrf: document.querySelector("#token").value,
                                notYou: !0,
                                intent: e.getIntent(),
                                context_id: e.getFlowId()
                            },
                            dataType: "json",
                            complete: function() {
                                if (typeof n == "function") return n()
                            }
                        })
                    }
                    var e = login.utils;
                    return {
                        makeServiceRequest: t,
                        getUafMessage: i,
                        cancelUafOperation: n,
                        deregisterUAFOperation: r,
                        fpNotYouClickHandler: s
                    }
                }();
                var fingerprint = fingerprint || {};
                fingerprint.login = function() {
                    function c(e) {
                        var n = e && e.getAttribute("href"),
                            r = document.querySelector("form[name=login] input[name=fpPromptWithError]");
                        t.showSpinner(), n ? window.location.href = n : window.location.href = r && r.value || window.location.href + "&fpPrompt=login"
                    }

                    function h() {
                        var e = document.querySelector("#fpLoginNotYouLink");
                        e && (e.onclick = function(n) {
                            n.preventDefault(), fingerprint.utils.cancelUafOperation(a), t.showSpinner(), fingerprint.utils.fpNotYouClickHandler(n, function() {
                                var t = [l, {
                                    evt: "transition_name",
                                    data: "process_fp_not_you",
                                    instrument: !0
                                }];
                                login.logger.clientLog(t, null), fingerprint.utils.deregisterUAFOperation(f), c(e)
                            })
                        })
                    }

                    function p() {
                        var e = document.querySelector(".fpLoginUsePasswordLink");
                        e && (e.onclick = function(n) {
                            n.preventDefault(), fingerprint.utils.cancelUafOperation(a), t.showSpinner();
                            var r = [l, {
                                evt: "transition_name",
                                data: "process_use_password_instead",
                                instrument: !0
                            }];
                            login.logger.clientLog(r, function() {
                                c(e)
                            })
                        })
                    }

                    function d(e) {
                        var t = e && e.uafProtocolMessage,
                            n = document.querySelectorAll("form[name=login] input[type=hidden]"),
                            r = login.utils.getKmliCb(),
                            i = ["login_email", "login_password", "login_phone", "login_pin"],
                            s = {};
                        t = JSON.parse(t), t || c(), s.uafResponse = JSON.stringify(t);
                        if (n.length)
                            for (var o = 0; o < n.length; o++)
                                for (var u = 0; u < i.length; u++) n[o] && n[o].name !== i[u] && (s[n[o].name] = n[o].value);
                        r && r.checked && (s.rememberMe = "true"), fingerprint.utils.makeServiceRequest({
                            data: s
                        }, function(e) {
                            e.returnUrl ? window.location.href = e.returnUrl : c()
                        }, function() {
                            c()
                        })
                    }

                    function v(e) {
                        var i = document.querySelector(".fpLoginTryAgain"),
                            s = document.querySelector(".headerIconThumbprint");
                        if (e === r) return;
                        if (n > 0) {
                            n -= 1, t.showSpinner(), t.showSpinnerMessage("oneSecond");
                            var o = [l, {
                                evt: "transition_name",
                                data: "process_fp_login_retry",
                                instrument: !0
                            }, {
                                evt: "fp_login_error",
                                data: e || "",
                                instrument: !0
                            }];
                            return login.logger.clientLog(o, null), setTimeout(function() {
                                t.hideSpinner(), t.hideSpinnerMessage("oneSecond"), s && (s.className = "headerIconThumbprintError"), i && $(i).removeClass("hide"), m()
                            }, 1e3)
                        }
                        c()
                    }

                    function m() {
                        navigator.uaf.processUAFOperation(u, d, v)
                    }

                    function g(e) {
                        e = e || {}, a = fingerprint.utils.getUafMessage(e.cancelUafRequest), f = fingerprint.utils.getUafMessage(e.deregUafRequest), e.uafRequest ? (u = fingerprint.utils.getUafMessage(e.uafRequest), t.hideSpinner(), fingerprint.utils.cancelUafOperation(a, function() {
                            setTimeout(m, 500)
                        })) : c()
                    }

                    function y() {
                        c()
                    }
                    var e = window.PAYPAL && window.PAYPAL.ulData || {},
                        t = login.utils,
                        n = 2,
                        r = 3,
                        i = document.querySelector(".fpLogin"),
                        s = document.querySelector(".footer"),
                        o = $("body").data("fpLoginError"),
                        u, a, f, l = {
                            evt: "state_name",
                            data: "begin_fp_login",
                            instrument: !0
                        };
                    e.fingerprintProceed === "login" && navigator.uaf && (h(), p(), fingerprint.utils.makeServiceRequest({
                        path: "/challenge/uaf"
                    }, g, y))
                }, login.webAuthnLogin = function() {
                    function n(n) {
                        function r() {
                            var e = n || {},
                                t = {
                                    authenticatorSelection: {
                                        authenticatorAttachment: "platform"
                                    }
                                };
                            return t.challenge = s(e.challenge), "timeout" in e && (t.timeout = e.timeout), "rpId" in e && (t.rpId = e.rpId), "allowCredentials" in e && (t.allowCredentials = o(e.allowCredentials)), navigator.credentials.get({
                                publicKey: t
                            })
                        }

                        function i(e) {
                            return btoa((new Uint8Array(e)).reduce(function(e, t) {
                                return e + String.fromCharCode(t)
                            }, ""))
                        }

                        function s(e) {
                            return Uint8Array.from(atob(e), function(e) {
                                return e.charCodeAt(0)
                            })
                        }

                        function o(e) {
                            var t = [];
                            for (var n = 0; n < e.length; n++) {
                                var r = {};
                                r.type = e[n].type, r.id = s(e[n].id), "transports" in e && (r.transports = e.transports), t.push(r)
                            }
                            return t
                        }

                        function u(n) {
                            var r = document.querySelectorAll("form[name=login] input[type=hidden]"),
                                s = {},
                                o = {},
                                u = document.querySelector("input[name=login_email]"),
                                a = document.querySelector("input[name=login_phone]");
                            login.logger.log({
                                evt: "state_name",
                                data: "begin_fp_login",
                                instrument: !0
                            }), login.logger.log({
                                evt: "transition_name",
                                data: "process_fp_assertion_success",
                                instrument: !0
                            }), login.logger.log({
                                evt: t,
                                data: "PROCESS_FP_ASSERTION_SUCCESS",
                                calEvent: !0
                            }), login.logger.pushLogs(), e.addHiddenElement("webAuthnEnrolledUser", !0, document.querySelector("form[name=login]"));
                            for (var f = 0; f < r.length; f++) o[r[f].name] = r[f].value;
                            a && a.value ? o.login_phone = a.value : o.login_email = u && u.value, "id" in n && (s.id = n.id), "type" in n && (s.type = n.type), "rawId" in n && (s.rawId = i(n.rawId));
                            if ("response" in n) {
                                var l = {};
                                return l.clientDataJSON = i(n.response.clientDataJSON), l.authenticatorData = i(n.response.authenticatorData), l.signature = i(n.response.signature), l.userHandle = i(n.response.userHandle), s.response = l, o.webauthn_response = JSON.stringify(s), e.makeServerRequestAndReturnPromise("/signin", {
                                    data: o
                                })
                            }
                            return Promise.reject()
                        }
                        login.logger.log({
                            evt: "state_name",
                            data: "begin_fp_login",
                            instrument: !0
                        }), login.logger.log({
                            evt: "transition_name",
                            data: "prepare_fp_assertion",
                            instrument: !0
                        }), login.logger.log({
                            evt: t,
                            data: "PREPARE_FP_ASSERTION",
                            calEvent: !0
                        }), r().then(u).catch(function() {
                            e.addHiddenElement("webAuthnEnrolledUser", !0, document.querySelector("form[name=login]")), login.logger.log({
                                evt: "state_name",
                                data: "begin_fp_login",
                                instrument: !0
                            }), login.logger.log({
                                evt: "transition_name",
                                data: "process_fp_assertion_failed",
                                instrument: !0
                            }), login.logger.log({
                                evt: t,
                                data: "PROCESS_FP_ASSERTION_FAILED",
                                calEvent: !0,
                                status: "ERROR"
                            })
                        }).then(function(n) {
                            login.logger.log({
                                evt: "state_name",
                                data: "begin_fp_login",
                                instrument: !0
                            }), login.logger.log({
                                evt: "transition_name",
                                data: "process_fp_login_success",
                                instrument: !0
                            }), login.logger.log({
                                evt: t,
                                data: "PROCESS_FP_LOGIN_SUCCESS",
                                calEvent: !0
                            }), login.logger.pushLogs(), n.returnUrl ? window.location.href = n.returnUrl : e.hideSpinner()
                        }).catch(function() {
                            login.logger.log({
                                evt: "state_name",
                                data: "begin_fp_login",
                                instrument: !0
                            }), login.logger.log({
                                evt: "transition_name",
                                data: "process_fp_login_failed",
                                instrument: !0
                            }), login.logger.log({
                                evt: t,
                                data: "PROCESS_FP_LOGIN_FAILED",
                                calEvent: !0,
                                status: "ERROR"
                            }), login.logger.pushLogs(), e.hideSpinner()
                        })
                    }

                    function r() {
                        var t = window.PublicKeyCredential;
                        t && t.isUserVerifyingPlatformAuthenticatorAvailable && t.isUserVerifyingPlatformAuthenticatorAvailable().then(function(t) {
                            t === !0 && e.addHiddenElement("isUVPAAExist", "yes", document.querySelector("form[name=login]"))
                        }).catch(function(e) {})
                    }
                    var e = login.utils,
                        t = "WEBAUTH_N_CLIENT";
                    return function(i) {
                        var s = i && i.webAuthnLoginContext || $("body").data("webAuthnLoginContext"),
                            o = i && i.webAuthnLoginContext || $("body").data("webAuthnSupportLookup"),
                            u;
                        if (s && typeof navigator.credentials == "object" && typeof navigator.credentials.get == "function" && !e.isSLActivation(i) && !e.isAPayEnabled(i)) try {
                            u = JSON.parse(s), n(u)
                        } catch (a) {}
                        o && r()
                    }
                }(), login.bootstrap = function() {
                    login.core(), login.jwt && login.jwt(), login.oneTouchLogin && login.oneTouchLogin(), login.singleSignOn && login.singleSignOn(), login.webAuthnLogin && login.webAuthnLogin(), login.oneTouch(), login.footer(), login.pwr(), login.ads.init(), login.recaptchaV3 && login.recaptchaV3(), login.fn.initialize(), login.checkoutIncontext && login.checkoutIncontext(), login.smartLock && login.smartLock(), login.tpdLogin && login.tpdLogin.initialize(), login.showHidePassword()
                }, document.onreadystatechange = function() {
                    var e, t = login.utils.getSplitLoginContext(),
                        n = login.utils.getIntent(),
                        r = $("body").data("tealeafEnable"),
                        i = $("body").data("cookieBannerEnabled"),
                        s = $("body").data("lazyLoadCountryCodes"),
                        r = $("body").data("tealeafEnable"),
                        o = $("body").data("oneTouchUser");
                    document.readyState === "complete" && (login.bootstrap(), e = window.PAYPAL && window.PAYPAL.ulData || {}, e.preloadScriptUrl && asyncLoadScriptUrls(e.preloadScriptUrl), t ? instrumentSplitLoginPageLoad(t) : (n === "checkout" && instrumentUlAsLandingPageLoad(), n === "prox" && instrumentProx()), addEvent(document, "click", login.utils.documentClickHandler), login.pubsub.subscribe("WINDOW_CLICK", login.utils.toggleRememberInfoTooltip), showReturnToMerchantLink(), e.fingerprintProceed === "lookup" && fingerprint && fingerprint.lookup(), e.fingerprintProceed === "login" && fingerprint && fingerprint.login(), i && !o && login.loadResources && login.loadResources.showCookieBanner(), s === "true" && login.loadResources && login.loadResources.loadPhoneCountryCodes(), r && login.teaLeaf())
                }, login.teaLeaf = function() {
                    return function() {
                        var t = document.getElementById("teaLeafconfig"),
                            n = $("body").data("tealeafUrl");
                        t && t.parentNode && t.parentNode.removeChild(t), t = document.createElement("script"), t.id = "teaLeafconfig", t.setAttribute("nonce", $("body").data("nonce")), t.asyc = !0, t.src = n, document.body.appendChild(t)
                    }
                }(), login.recaptchaV3 = function() {
                    return function() {
                        function r(e) {
                            var t = e && e.data,
                                n;
                            if (!t) return;
                            try {
                                n = JSON.parse(e.data)
                            } catch (r) {
                                login.logger.log({
                                    evt: "RECAPTCHAV3",
                                    data: "TOKEN_MSG_ERROR",
                                    calEvent: !0
                                }), login.logger.log({
                                    evt: "recaptchaV3",
                                    data: "NO_TOKEN",
                                    instrument: !0
                                }), login.logger.pushLogs();
                                return
                            }
                            if (t.type === "verifyPing" && e.source) {
                                e.source.postMessage({
                                    type: "verifyAck",
                                    data: t.data
                                }, "*");
                                return
                            }
                            if (!n || n.source !== "ulframe" || n.intent !== "recaptchav3") return;
                            if (n.error || !n.token) {
                                login.logger.log({
                                    evt: "RECAPTCHAV3",
                                    data: n.error || "TOKEN_RCV_ERROR",
                                    calEvent: !0
                                }), login.logger.log({
                                    evt: "recaptchaV3",
                                    data: "NO_TOKEN",
                                    instrument: !0
                                }), login.logger.pushLogs();
                                return
                            }
                            login.logger.log({
                                evt: "RECAPTCHAV3",
                                data: "TOKEN_RECEIVED",
                                calEvent: !0
                            }), login.logger.pushLogs({
                                data: {
                                    v3Token: n.token
                                }
                            })
                        }

                        function i(e) {
                            n.contentWindow.postMessage(JSON.stringify({
                                source: "UL",
                                intent: "recaptchav3",
                                skey: t,
                                action: "loginPage"
                            }), "*")
                        }
                        var t = $("body").data("recaptchaV3SiteKey");
                        if (!t) return;
                        login.logger.log({
                            evt: "recaptchaV3",
                            data: "Y",
                            instrument: !0
                        });
                        var n = login.utils.createIframe({
                            id: "ulframe",
                            sandbox: "allow-same-origin allow-scripts",
                            frameBorder: "0",
                            src: "https://www.paypalobjects.com/unifiedlogin/ulframe.html",
                            style: "position: fixed; bottom: 30px; right: 1.5px; height: 80px; width: 271px;"
                        });
                        addEvent(window, "message", r), addEvent(n, "load", i)
                    }
                }()
            }();
    </script>
    <script src="https://www.paypalobjects.com/pa/js/min/pa.js"></script>
    <script nonce="06Rht3p4EBANNpwNtMmPu7j3G9yfK+KB/qitoTWQgCJgHvts">
        (function() {
            if (typeof PAYPAL.analytics != "undefined") {
                PAYPAL.core = PAYPAL.core || {};
                PAYPAL.core.pta = PAYPAL.analytics.setup({
                    data: 'pgrp=main%3Aunifiedlogin%3Asplitlogin%3A%3Aemail&page=main%3Aunifiedlogin%3Asplitlogin%3A%3Aemail%3A%3A%3A&qual=input_email&pgst=1542434049696&calc=e531003da6b4e&rsta=en_GB&pgtf=Nodejs&env=sandbox&s=ci&ccpg=GB&csci=9b83771c80ee422c9875870682931b97&comp=unifiedloginnodeweb&tsrce=unifiedloginnodeweb&cu=0&ef_policy=gdpr_eu&transition_name=ss_prepare_email&xe=176&xt=298&ctx_login_ot_content=1&obex=signin&landing_page=login&state_name=begin_email&ctx_login_ctxid_fetch=ctxid-not-exist&ctx_login_content_fetch=success&ctx_login_signup_btn=shown%7Cdefault&ctx_login_intent=signin&ctx_login_flow=Signin&ctx_login_state_transition=login_loaded&post_login_redirect=default&ret_url=%2F',
                    url: 'https:\/\/t.paypal.com\/ts'
                });
            }
        }());
    </script>
    <noscript><img src="https://t.paypal.com/ts?nojs=1&pgrp=main%3Aunifiedlogin%3Asplitlogin%3A%3Aemail&page=main%3Aunifiedlogin%3Asplitlogin%3A%3Aemail%3A%3A%3A&qual=input_email&pgst=1542434049696&calc=e531003da6b4e&rsta=en_GB&pgtf=Nodejs&env=sandbox&s=ci&ccpg=GB&csci=9b83771c80ee422c9875870682931b97&comp=unifiedloginnodeweb&tsrce=unifiedloginnodeweb&cu=0&ef_policy=gdpr_eu&transition_name=ss_prepare_email&xe=176&xt=298&ctx_login_ot_content=1&obex=signin&landing_page=login&state_name=begin_email&ctx_login_ctxid_fetch=ctxid-not-exist&ctx_login_content_fetch=success&ctx_login_signup_btn=shown%7Cdefault&ctx_login_intent=signin&ctx_login_flow=Signin&ctx_login_state_transition=login_loaded&post_login_redirect=default&ret_url=%2F" alt="" height="1" width="1" border="0"></noscript>
</body>

</html>