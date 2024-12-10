<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>{{config('app.name')}}</title>
</head>
<body>

    @include('components.header')

    <main>
        {{ $slot }}
    </main>

    @include('components.footer')

    <a
    href="javascript:void(0)"
    class="back-to-top fixed bottom-8 right-8 left-auto z-[999] hidden h-10 w-10 items-center justify-center rounded-md bg-primary text-white shadow-md duration-300 ease-in-out hover:bg-opacity-80"
  >
    <span
      class="mt-[6px] h-3 w-3 rotate-45 border-t border-l border-white"
    ></span>
  </a>


    <script>
        // ==== pricing plan toggler
        let togglePlan = document.querySelector("#togglePlan");

        document.querySelector(".monthly").addEventListener("click", () => {
          togglePlan.checked = true;
        });
        document.querySelector(".yearly").addEventListener("click", () => {
          togglePlan.checked = false;
        });

        // ==== for menu scroll
        const pageLink = document.querySelectorAll(".menu-scroll");

        pageLink.forEach((elem) => {
          elem.addEventListener("click", (e) => {
            e.preventDefault();
            document.querySelector(elem.getAttribute("href")).scrollIntoView({
              behavior: "smooth",
              offsetTop: 1 - 60,
            });
          });
        });

        // section menu active
        function onScroll(event) {
          const sections = document.querySelectorAll(".menu-scroll");
          const scrollPos =
            window.pageYOffset ||
            document.documentElement.scrollTop ||
            document.body.scrollTop;

          for (let i = 0; i < sections.length; i++) {
            const currLink = sections[i];
            const val = currLink.getAttribute("href");
            const refElement = document.querySelector(val);
            const scrollTopMinus = scrollPos + 73;
            if (
              refElement.offsetTop <= scrollTopMinus &&
              refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
            ) {
              document.querySelector(".menu-scroll").classList.remove("active");
              currLink.classList.add("active");
            } else {
              currLink.classList.remove("active");
            }
          }
        }

        window.document.addEventListener("scroll", onScroll);

        function initAcc(elem, option) {
          document.addEventListener("click", function (e) {
            if (!e.target.matches(elem + " .faq-btn")) return;
            else {
              if (!e.target.parentElement.classList.contains("active")) {
                if (option == true) {
                  var elementList = document.querySelectorAll(elem + " .faq");
                  Array.prototype.forEach.call(elementList, function (e) {
                    e.classList.remove("active");
                  });
                }
                e.target.parentElement.classList.add("active");
              } else {
                e.target.parentElement.classList.remove("active");
              }
            }
          });
        }

        //activate accordion function
        initAcc(".faqs", true);
      </script>

    <script src="{{ asset('assets/js/bundle.js') }}"></script>
</body>
</html>
