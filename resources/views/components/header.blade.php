<header
class="navbar absolute top-0 left-0 z-50 w-full border-stroke bg-white duration-300 dark:border-stroke-dark dark:bg-black"
>
<div class="container relative max-w-[1400px]">
  <div class="flex items-center justify-between">
    <div class="block py-4 lg:py-0">
      <a
        href=""
        class="block max-w-[145px] sm:max-w-[180px]"
      >
        <img
          src="{{asset('assets/images/logo.svg')}}"
          alt="logo"
          class="block dark:hidden"
        />
        <img
          src="{{asset('assets/images/logo-white.svg')}}"
          alt="logo"
          class="hidden dark:block"
        />
      </a>
    </div>
    <button
      class="navbarOpen absolute right-4 top-1/2 z-50 flex h-10 w-10 -translate-y-1/2 flex-col items-center justify-center space-y-[6px] font-bold lg:hidden"
      aria-label="navbarOpen"
      name="navbarOpen"
    >
      <span
        class="block h-[2px] w-7 bg-black dark:bg-white"
      ></span>
      <span
        class="block h-[2px] w-7 bg-black dark:bg-white"
      ></span>
      <span
        class="block h-[2px] w-7 bg-black dark:bg-white"
      ></span>
    </button>

    <div
      class="menu-wrapper relative hidden justify-between lg:flex"
    >
      <button
        class="navbarClose fixed top-10 right-10 z-[9999] flex h-10 w-10 flex-col items-center justify-center font-bold lg:hidden"
        name="navbarClose"
        aria-label="navbarClose"
      >
        <span
          class="block h-[2px] w-7 rotate-45 bg-black dark:bg-white"
        ></span>
        <span
          class="-mt-[2px] block h-[2px] w-7 -rotate-45 bg-black dark:bg-white"
        ></span>
      </button>

      <nav
        class="fixed top-0 left-0 z-[999] flex h-screen w-full items-center justify-center bg-white bg-opacity-95 text-center backdrop-blur-sm dark:bg-black dark:bg-opacity-95 lg:static lg:h-auto lg:w-max lg:bg-transparent lg:backdrop-blur-none lg:dark:bg-transparent"
      >
        <ul
          class="items-center space-y-3 lg:flex lg:space-x-8 lg:space-y-0 xl:space-x-10"
        >
          <li class="menu-item">
            <a
              href="#features"
              class="menu-scroll inline-flex items-center text-base font-medium text-black hover:text-primary dark:text-white dark:hover:text-primary lg:py-7"
            >
              Features
            </a>
          </li>
          <li class="menu-item">
            <a
              href="#about"
              class="menu-scroll inline-flex items-center text-base font-medium text-black hover:text-primary dark:text-white dark:hover:text-primary lg:py-7"
            >
              About
            </a>
          </li>
          <li class="menu-item">
            <a
              href="#work-process"
              class="menu-scroll inline-flex items-center text-base font-medium text-black hover:text-primary dark:text-white dark:hover:text-primary lg:py-7"
            >
              How It Works
            </a>
          </li>
          <li class="menu-item">
            <a
              href="#support"
              class="menu-scroll inline-flex items-center text-base font-medium text-black hover:text-primary dark:text-white dark:hover:text-primary lg:py-7"
            >
              Support
            </a>
          </li>
        </ul>
      </nav>
    </div>

    <div
      class="mr-[60px] flex items-center justify-end lg:mr-0"
    >
      <label
        for="themeSwitcher"
        class="inline-flex cursor-pointer items-center"
        aria-label="themeSwitcher"
        name="themeSwitcher"
      >
        <input
          type="checkbox"
          name="themeSwitcher"
          id="themeSwitcher"
          class="sr-only"
        />
        <span class="hidden dark:block">
          <svg
            width="21"
            height="21"
            viewBox="0 0 21 21"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <g clip-path="url(#clip0_420_119)">
              <path
                d="M8.40276 5.88205C8.40259 7.05058 8.75048 8.19267 9.40204 9.16268C10.0536 10.1327 10.9793 10.8866 12.0611 11.3284C13.143 11.7701 14.3318 11.8796 15.4761 11.6429C16.6204 11.4062 17.6683 10.8341 18.4861 9.99941V10.0834C18.4861 14.7243 14.7242 18.4862 10.0833 18.4862C5.44247 18.4862 1.68054 14.7243 1.68054 10.0834C1.68054 5.44259 5.44247 1.68066 10.0833 1.68066H10.1673C9.60775 2.22779 9.16333 2.88139 8.86028 3.60295C8.55722 4.32451 8.40166 5.09943 8.40276 5.88205V5.88205ZM3.3611 10.0834C3.36049 11.5833 3.86151 13.0403 4.78444 14.2226C5.70737 15.4049 6.99919 16.2446 8.45437 16.608C9.90954 16.9715 11.4445 16.8379 12.8149 16.2284C14.1854 15.6189 15.3127 14.5686 16.0174 13.2446C14.7632 13.54 13.4543 13.5102 12.215 13.1578C10.9756 12.8054 9.84679 12.1422 8.93568 11.2311C8.02457 10.32 7.36136 9.19119 7.00898 7.95181C6.6566 6.71243 6.62672 5.40357 6.92219 4.1494C5.84629 4.72259 4.94652 5.57759 4.31923 6.62288C3.69194 7.66817 3.36074 8.86438 3.3611 10.0834V10.0834Z"
                fill="white"
              />
            </g>
            <defs>
              <clipPath id="clip0_420_119">
                <rect width="20.1667" height="20.1667" fill="white" />
              </clipPath>
            </defs>
          </svg>
        </span>
        <span class="block dark:hidden">
          <svg
            width="23"
            height="22"
            viewBox="0 0 23 22"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <g clip-path="url(#clip0_1_11114)">
              <path
                d="M11.5658 16.4998C10.1071 16.4998 8.70815 15.9204 7.6767 14.8889C6.64525 13.8575 6.06579 12.4585 6.06579 10.9998C6.06579 9.54115 6.64525 8.1422 7.6767 7.11075C8.70815 6.0793 10.1071 5.49984 11.5658 5.49984C13.0245 5.49984 14.4234 6.0793 15.4549 7.11075C16.4863 8.1422 17.0658 9.54115 17.0658 10.9998C17.0658 12.4585 16.4863 13.8575 15.4549 14.8889C14.4234 15.9204 13.0245 16.4998 11.5658 16.4998ZM11.5658 14.6665C12.5382 14.6665 13.4709 14.2802 14.1585 13.5926C14.8461 12.9049 15.2325 11.9723 15.2325 10.9998C15.2325 10.0274 14.8461 9.09475 14.1585 8.40711C13.4709 7.71948 12.5382 7.33317 11.5658 7.33317C10.5933 7.33317 9.6607 7.71948 8.97306 8.40711C8.28543 9.09475 7.89912 10.0274 7.89912 10.9998C7.89912 11.9723 8.28543 12.9049 8.97306 13.5926C9.6607 14.2802 10.5933 14.6665 11.5658 14.6665ZM10.6491 0.916504H12.4825V3.6665H10.6491V0.916504ZM10.6491 18.3332H12.4825V21.0832H10.6491V18.3332ZM3.78787 4.51809L5.08404 3.22192L7.02829 5.16617L5.73212 6.46234L3.78787 4.519V4.51809ZM16.1033 16.8335L17.3995 15.5373L19.3437 17.4816L18.0475 18.7778L16.1033 16.8335ZM18.0475 3.221L19.3437 4.51809L17.3995 6.46234L16.1033 5.16617L18.0475 3.22192V3.221ZM5.73212 15.5373L7.02829 16.8335L5.08404 18.7778L3.78787 17.4816L5.73212 15.5373ZM21.6491 10.0832V11.9165H18.8991V10.0832H21.6491ZM4.23245 10.0832V11.9165H1.48245V10.0832H4.23245Z"
                fill="#181C31"
              />
            </g>
            <defs>
              <clipPath id="clip0_1_11114">
                <rect
                  width="22"
                  height="22"
                  fill="white"
                  transform="translate(0.565796)"
                />
              </clipPath>
            </defs>
          </svg>
        </span>
      </label>
    </div>
  </div>
</div>
</header>
