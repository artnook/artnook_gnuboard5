<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_PATH.'/head.php');
?>
<!-- 본인 코드 삽입 -->
<article class="silde_main">
        <div class="slide-intro">
          <section
            id="image-carousel"
            class="splide"
            aria-label="Beautiful Images"
          >
            <div class="splide__track">
              <ul class="splide__list">
                <li class="splide__slide">
                  <img src="/gnuboard5/images/main/main%20slide1.png" alt="" />
                </li>
                <li class="splide__slide">
                  <img src="/gnuboard5/images/main/main%20slide2.png" alt="" />
                  <div class="slide-txt">
                    <p>Art stories</p>
                  </div>
                </li>
                <li class="splide__slide">
                  <img src="/gnuboard5/images/main/main%20slide3.png" alt="" />
                </li>
              </ul>
            </div>
          </section>
        </div>
      </article>

      <main id="main">
        <!-- section : 제목이 있는 그룹  -->
        <!-- 배경이 100% 안에 내용이 margin이 있고 싶을 때 main의 container를 배꼬 원하는 부분을 .container로 싸준다.  -->
        <section class="museum">
          <div class="inner">
            <div class="exb-museum">
              <div class="contetnt_area">
                <div class="exb-box">
                  <div class="txt-box">
                    <h2>프롤로그</h2>
                    <strong class="g_title">Grandpalais</strong>
                    <p class="g_tit">
                      1880년대 파리가 빛난다! 진보의 상징인 전기는 금세기의
                      혁신입니다. 전기 크레인과 같은 현대 기술을 사용하여 지어진
                      근대성의 쇼케이스Grand Palais는 그럼에도 불구하고 자연광이
                      비추도록 설계되었습니다.
                    </p>
                    <a href="#" class="btn_line white">자세히 보기</a>
                  </div>
                  <div class="img_box">
                    <img src="/gnuboard5/images/main/inner_main.png" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- <section class="tiket">
          <div class="inner">
            <div class="exb_tiket">
              <h2 class="tiket_tit">Reservation</h2>
              <div class="tiket_txt_box">
                <h2>영원한 무하</h2>
                <p>
                  Grand Palais Immersif(Rmn - Grand Palais의 자회사)와 프라하의
                  Mucha 재단이 공동 제작한 전시회.
                </p>
                <p>진행중 전시기간 2023.03.22~2023.11.05</p>
              </div>
              <a href="#" class="btn btn_line"> 자세히 보기 </a>
            </div>
            <div class="slide-tiket">
              <div
                id="image-carousel"
                class="slide-tiket"
                aria-label="Beautiful Images"
              >
                <div class="splide__track">
                  <ul class="splide__list">
                    <li class="splide__slide">
                      <img src="./images/main/tiket img1.png" alt="" />
                    </li>
                    <li class="splide__slide">
                      <img src="./images/main/tiket img2.png" alt="" />
                    </li>
                    <li class="splide__slide">
                      <img src="./images/main/tiket img1.png" alt="" />
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section> -->
        <section id="app">
          <div class="inner">
            <div class="item">
              <div class="part image" @click="nextSlide">
                <transition
                  :css="false"
                  name="image-slide"
                  mode="in-out"
                  @enter="imgEnter"
                  @leave="imgLeave"
                >
                  <div
                    class="image-slide"
                    :style="slideImage"
                    :key="activeSlide"
                  ></div>
                </transition>
              </div>
              <div class="part text">
                <transition
                  :css="false"
                  mode="out-in"
                  @enter="enter"
                  @leave="leave"
                >
                  <div class="inner" :key="activeSlide">
                    <div class="brand">The Landscape Book</div>
                    <div class="centered">
                      <h1>{{ activeItem.title }}</h1>
                      <h3 :style="descriptionColor">
                        {{ activeItem.description }}
                      </h3>
                      <h6>{{ activeItem.creditTitle }}</h6>
                      <h5>{{ activeItem.credit }}</h5>
                      <button :style="buttonColor" @click="nextSlide()">
                        <i class="fa fa-play"></i>
                      </button>
                    </div>
                    <div class="paginator" @click="nextSlide()">
                      {{ activeSlide+1 }} of {{ slides.length }}
                    </div>
                  </div>
                </transition>
              </div>
            </div>
          </div>
        </section>
        <section class="clock">
          <div class="inner">
            <div class="area3">
              <div class="wrapper">
                <div class="box-image">
                  <picture>
                    <img src="/gnuboard5/images/main/main%20clock.png" alt="" />
                  </picture>
                </div>
                <div class="box-text">
                  <p class="text-head">
                    <span class="text1">FINALLY, WE’RE</span>
                    <br />
                    <span class="text2">IN France</span>
                  </p>
                  <p class="text-sub1">
                    The Grand Palais Museum in
                    <br />
                    France from the 1900s
                  </p>
                  <p class="text-date">AUG 25TH. 2023</p>
                  <p id="display">00:00:00</p>
                </div>
                <p class="text-sub3">
                  Grand Palais is a cultural operator whose mission is to
                  promote
                  <br />
                  access to culture throughout the country and beyond.
                </p>
              </div>
              <div class="box-clock">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  width="1924"
                  height="2248"
                  viewBox="0 0 1924 2248"
                >
                  <defs>
                    <style>
                      .cls-1,
                      .cls-2 {
                        fill: #333;
                        stroke: #333;
                      }

                      .cls-1 {
                        stroke-linecap: round;
                        stroke-linejoin: round;
                        stroke-width: 16px;
                        fill-rule: evenodd;
                      }

                      .cls-2 {
                        stroke-width: 1px;
                        filter: url(#filter);
                      }
                    </style>
                    <filter
                      id="filter"
                      x="834"
                      y="1015"
                      width="257"
                      height="257"
                      filterUnits="userSpaceOnUse"
                    >
                      <feOffset result="offset" dy="19" in="SourceAlpha" />
                      <feGaussianBlur result="blur" stdDeviation="8.718" />
                      <feFlood result="flood" flood-opacity="0.4" />
                      <feComposite
                        result="composite"
                        operator="in"
                        in2="blur"
                      />
                      <feBlend result="blend" in="SourceGraphic" />
                    </filter>
                  </defs>
                  <style>
                    #svg-clock-minute,
                    #svg-clock-hour,
                    #svg-clock-second {
                      transform-origin: 50%;
                      transform: rotate(0);
                    }
                    #svg-group-minute,
                    #svg-group-hour,
                    #svg-group-second {
                      transform-origin: 50%;
                      animation-name: rotate;
                      animation-iteration-count: infinite;
                      transform: rotate(0);
                    }
                    #svg-group-minute {
                      animation-duration: 3600s;
                      animation-timing-function: linear;
                    }
                    #svg-group-hour {
                      animation-duration: 43200s;
                      animation-timing-function: linear;
                    }
                    #svg-group-second {
                      animation-duration: 60s;
                      animation-timing-function: steps(60, end);
                    }
                    @keyframes rotate {
                      0% {
                        transfrom: rotate(0deg);
                      }
                      to {
                        transform: rotate(360deg);
                      }
                    }
                  </style>
                  <image
                    id="svg-group-minute"
                    x="956"
                    y="259"
                    width="12"
                    height="865"
                    xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAANhCAYAAADT91r+AAAAoklEQVR4nO3LsQEAIAzDsMBL/f82uKFz5Nk6M/Oy6G7mAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA1AMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACgHgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD1AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAKgHAAAAAAAAAAAAVSDJBx60CFqSY0MZAAAAAElFTkSuQmCC"
                  />
                  <path
                    id="svg-group-hour"
                    class="cls-1"
                    d="M961.891,1123.95l588.219,422.1Z"
                  />
                  <image
                    id="svg-group-second"
                    x="959"
                    y="205"
                    width="6"
                    height="1130"
                    xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAARqCAYAAABrtQR6AAAAbUlEQVR4nO3JMQEAIAzEwAcLmMZ1MdCRrZcxt86tStPuZgAAAAAAAAAAAAAAAAAAAMYDAAAAAAAAAAAAAAAAgPEAAAAAAAAAAAAAAAAAYDwAAAAAAAAAAAAAAAAAGA8AAAAAAAAAAAAAAPyHJA9UpgttIjFsdwAAAABJRU5ErkJggg=="
                  />
                  <g style="fill: #333; filter: url(#filter)">
                    <circle
                      id="circle"
                      class="cls-2"
                      cx="962"
                      cy="1124"
                      r="50"
                      style="stroke: inherit; filter: none; fill: inherit"
                    />
                  </g>
                  <use
                    xlink:href="#circle"
                    style="stroke: #333; filter: none; fill: none"
                  />
                </svg>
              </div>
            </div>
          </div>
        </section>
        <section class="circle">
          <div class="inner">
            <div class="txt_box">
              <h2>
                프랑스에서 예술을 감상하세요.
                <br />
                Enjoy Art in France
              </h2>
            </div>
            <div class="txt_box_right">
              <img
                src="./images/main/Ellipse prance.png"
                alt="프랑스 국기"
                class="img_prance"
              />
              <img
                id="spin"
                src="./images/main/circle-logo.png"
                alt="그랑팔레 플렛폼"
                class="img_circle"
              />
            </div>
          </div>
        </section>
      </main>
<!-- 본인 코드 삽입-->

<?php
include_once(G5_PATH.'/tail.php');