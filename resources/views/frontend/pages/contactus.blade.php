@extends('frontend.master')

@section('content')
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,700" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="view-source:https://preview.colorlib.com/theme/bootstrap/contact-form-05/css/style.css">
        <script nonce="17df94fe-c731-4296-944f-a7a43be57bbb">
            (function(w, d) {
                ! function(j, k, l, m) {
                    j[l] = j[l] || {};
                    j[l].executed = [];
                    j.zaraz = {
                        deferred: [],
                        listeners: []
                    };
                    j.zaraz.q = [];
                    j.zaraz._f = function(n) {
                        return async function() {
                            var o = Array.prototype.slice.call(arguments);
                            j.zaraz.q.push({
                                m: n,
                                a: o
                            })
                        }
                    };
                    for (const p of ["track", "set", "debug"]) j.zaraz[p] = j.zaraz._f(p);
                    j.zaraz.init = () => {
                        var q = k.getElementsByTagName(m)[0],
                            r = k.createElement(m),
                            s = k.getElementsByTagName("title")[0];
                        s && (j[l].t = k.getElementsByTagName("title")[0].text);
                        j[l].x = Math.random();
                        j[l].w = j.screen.width;
                        j[l].h = j.screen.height;
                        j[l].j = j.innerHeight;
                        j[l].e = j.innerWidth;
                        j[l].l = j.location.href;
                        j[l].r = k.referrer;
                        j[l].k = j.screen.colorDepth;
                        j[l].n = k.characterSet;
                        j[l].o = (new Date).getTimezoneOffset();
                        if (j.dataLayer)
                            for (const w of Object.entries(Object.entries(dataLayer).reduce(((x, y) => ({
                                    ...x[1],
                                    ...y[1]
                                })), {}))) zaraz.set(w[0], w[1], {
                                scope: "page"
                            });
                        j[l].q = [];
                        for (; j.zaraz.q.length;) {
                            const z = j.zaraz.q.shift();
                            j[l].q.push(z)
                        }
                        r.defer = !0;
                        for (const A of [localStorage, sessionStorage]) Object.keys(A || {}).filter((C => C.startsWith(
                            "_zaraz_"))).forEach((B => {
                            try {
                                j[l]["z_" + B.slice(7)] = JSON.parse(A.getItem(B))
                            } catch {
                                j[l]["z_" + B.slice(7)] = A.getItem(B)
                            }
                        }));
                        r.referrerPolicy = "origin";
                        r.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(j[l])));
                        q.parentNode.insertBefore(r, q)
                    };
                    ["complete", "interactive"].includes(k.readyState) ? zaraz.init() : j.addEventListener(
                        "DOMContentLoaded", zaraz.init)
                }(w, d, "zarazData", "script");
            })(window, document);
        </script>
    </head>

    <body>
        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center mb-5 mt-5">
                    </div>
                </div>
                <form action="{{ route('contact.store') }}" method="post">
                    @csrf
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="wrapper">
                                <div class="row no-gutters">
                                    <div class="col-lg-6">
                                        <div class="contact-wrap w-100">
                                            <h3>Contact us</h3>
                                            <p class="mb-4">We're open for any suggestion or just to have a chat</p>
                                            <div id="form-message-warning" class="mb-4"></div>
                                            <div id="form-message-success" class="mb-4">

                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-md-4">
                                                    <div class="dbox w-100 d-flex align-items-start">
                                                        <div class="text">
                                                            <p><span>Address:</span>Uttara sector-11, Dhaka, Bangladesh</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="dbox w-100 d-flex align-items-start">
                                                        <div class="text">
                                                            <p><span>Email:</span> <a
                                                                    href="/cdn-cgi/l/email-protection#6900070f062910061c1b1a001d0c470a0604"><span
                                                                        class="__cf_email__"
                                                                        data-cfemail="026b6c646d427b6d7770716b76672c616d6f">[shantaisalam@gmail.com]</span></a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="dbox w-100 d-flex align-items-start">
                                                        <div class="text">
                                                            <p><span>Phone:</span> <a
                                                                    href="tel://1234567920">01635746591</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-4">
                                                            <input type="text" class="form-control" name="name"
                                                                id="name" placeholder="Name">
                                                            @error('name')
                                                                <div class ="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-4">
                                                            <input type="email" class="form-control" name="email"
                                                                id="email" placeholder="Email">
                                                            @error('email')
                                                                <div class ="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-4">
                                                            <input type="text" class="form-control" name="subject"
                                                                id="subject" placeholder="Subject">
                                                            @error('subject')
                                                                <div class ="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-4">
                                                            <textarea name="message" class="form-control" id="message" cols="30" rows="4"
                                                                placeholder="Create a message here"></textarea>
                                                            @error('message')
                                                                <div class ="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-primary py-3 px-4">Send
                                                                Message</button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="w-100 social-media mt-5">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 d-flex align-items-stretch">
                                        <div class="info-wrap w-100 p-5 img">
                                            <img src="https://img.freepik.com/free-photo/celebration-hall-with-full-guests_8353-10399.jpg?w=1060&t=st=1703614254~exp=1703614854~hmac=9b3a1fe071a925c06078a41e4b3deeca9c1e49ecd28cb194c62c084b9307d04f"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <script data-cfasync="false"
            src="view-source:https://preview.colorlib.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
        </script>
        <script src="js/jquery.min.js"></script>
        <script src="jview-source:https://preview.colorlib.com/theme/bootstrap/contact-form-05/js/popper.js"></script>
        <script src="view-source:https://preview.colorlib.com/theme/bootstrap/contact-form-05/js/bootstrap.min.js"></script>
        <script src="view-source:https://preview.colorlib.com/theme/bootstrap/contact-form-05/js/jquery.validate.min.js">
        </script>
        <script src="view-source:https://preview.colorlib.com/theme/bootstrap/contact-form-05/js/main.js"></script>
        <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317"
            integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA=="
            data-cf-beacon='{"rayId":"82fb04d4dcb04e9c","version":"2023.10.0","token":"cd0b4b3a733644fc843ef0b185f98241"}'
            crossorigin="anonymous"></script>
    </body>

    </html>
@endsection
