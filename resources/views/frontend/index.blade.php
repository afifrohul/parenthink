<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ asset('assets/img-admin/parenthink.png') }}" type="image/x-icon">
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
      crossorigin="anonymous"
    />
    <title>Parenthink</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css-admin/style.css')}}">
  </head>
  <body
    class="
      antialiased
      {{-- bg-amber-50 --}}
    "
  >
  <header>
     <nav
        class="
          flex flex-wrapx`
          items-center
          justify-between
          w-full
          py-4
          md:py-0
          px-4
          text-lg text-gray-700
          bg-gradient-to-r from-amber-100 to-amber-200
          shadow-lg
          fixed
        "
      >
       <div>
          <a href="#">
            <img src="{{asset('assets/img-admin/parenthink side.png')}}" class="flex-none h-10">
          </a>
        </div>
       
         <svg
            xmlns="http://www.w3.org/2000/svg"
            id="menu-button"
            class="h-6 w-6 cursor-pointer md:hidden block"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16"
            />
          </svg>
       
       <div class="hidden w-full md:flex md:items-center md:w-auto py-2" id="menu">
          <ul
            class="
              pt-4
              text-base text-gray-700
              md:flex
              md:justify-between 
              md:pt-0"
          >
            <li>
              <a class="md:p-4 py-2 block duration-300 hover:text-amber-400" href="#"
                >About</a
              >
            </li>
            <li>
              <a class="md:p-4 py-2 block duration-300 hover:text-amber-400" href="#"
                >Features</a
              >
            </li>
            <li>
              <a class="md:p-4 py-2 block duration-300 hover:text-amber-400" href="#"
                >Article</a
              >
            </li>
            <li>
              <p
                class="md:p-4 py-2 block duration-300 hover:text-amber-400 text-amber-700"
                >Hello, Admin</p
              >
            </li>
          </ul>
        </div>
    </nav>
  </header>
  <div class="bg-amber-200">
    <div class="flex flex-wrap flex-col-reverse sm:flex-row w-4/5 m-auto pt-28 ">
      <div class="w-full sm:w-1/2  flex flex-wrap content-center">
        <img src="{{asset('assets/img-admin/parenthink.png')}}" class="flex-none">
      </div>
      <div class="w-full sm:w-1/2  flex flex-wrap content-center">
        <div class="align-middle">
        <h3 class="text-6xl text-amber-500 font-bold leading-none mb-3">
          Create a Wonderfull Family.
        </h3>
        <div class="flex justify-start">
          <div class="w-10 h-1 bg-white opacity-70 rounded-sm mr-1" ></div>
          <div class="w-64 h-1 bg-white opacity-70 rounded-sm" ></div>
        </div>
        <p class="text-gray-800 text-2xl">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis et quidem atque commodi, rem,
        </div>
      </div>
    </div>
  </div>
  <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 400" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150"><path d="M 0,400 C 0,400 0,200 0,200 C 145.59999999999997,209.46666666666667 291.19999999999993,218.93333333333334 447,205 C 602.8000000000001,191.06666666666666 768.8,153.73333333333335 936,149 C 1103.2,144.26666666666665 1271.6,172.13333333333333 1440,200 C 1440,200 1440,400 1440,400 Z" stroke="none" stroke-width="0" fill="#fde68a" fill-opacity="1" class="transition-all duration-300 ease-in-out delay-150 path-0" transform="rotate(-180 720 200)"></path></svg>
  <div class="container max-w-5xl mx-auto m-8">
    <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
    About
    </h1>
    <div class="flex justify-center">
      <div class="w-10 h-1 bg-amber-300 opacity-40 rounded-sm mr-1" ></div>
      <div class="w-44 h-1 bg-amber-300 opacity-40 rounded-sm" ></div>
    </div>
    <div class="w-full mb-4">
        <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
    </div>
    <div class="flex flex-wrap">
        <div class="w-5/6 sm:w-1/2 p-6 flex flex-wrap content-center">
            <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
            Apa itu Parenthink???
            </h3>
            <p class="text-gray-600 mb-8">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid praesentium quod ullam ipsam. Doloremque asperiores, dolorum explicabo sed illo voluptates facilis ullam provident iusto voluptate ipsa assumenda. Reiciendis provident assumenda, quae rem voluptatum esse numquam iure error id sint itaque totam, ipsam tempora necessitatibus cumque modi magni corporis beatae harum nam incidunt autem. Domodi, rerum eius, vitae molestiae vero eum ut libero! Amet maxime deserunt vitae officia!
            <br />
            <br />
            </p>
        </div>
        <div class="w-full sm:w-1/2 p-6">
            <svg class="w-5/6 sm:h-64 mx-auto" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" width="883.7815" height="672.25367" viewBox="0 0 883.7815 672.25367" xmlns:xlink="http://www.w3.org/1999/xlink"><rect x="0.2185" y="606.99638" width="883.56299" height="65.25729" fill="#e6e6e6"/><polygon points="882.556 607.051 0 607.051 0 604.87 882.951 604.87 882.556 607.051" fill="#3f3d56"/><path d="M851.298,365.06194v193.1823H348.92048V365.06194A251.19094,251.19094,0,0,1,585.60763,114.28746q7.19385-.41944,14.50162-.4143c2.776,0,5.54167.04141,8.28664.145A250.32942,250.32942,0,0,1,777.723,187.44814c1.357,1.35693,2.6932,2.72423,4.0294,4.11227A251.03573,251.03573,0,0,1,851.298,365.06194Z" transform="translate(-158.10925 -113.87316)" fill="#e6e6e6"/><path d="M608.39589,114.0182v444.226H585.60763V114.28746q7.19385-.41944,14.50162-.4143C602.88527,113.87316,605.65092,113.91457,608.39589,114.0182Z" transform="translate(-158.10925 -113.87316)" fill="#fff"/><path d="M801.07064,214.34867H399.14786a251.9462,251.9462,0,0,1,19.31826-22.78826H781.75239A251.94772,251.94772,0,0,1,801.07064,214.34867Z" transform="translate(-158.10925 -113.87316)" fill="#fff"/><rect x="476.90748" y="165.7328" width="178.04883" height="301.42653" fill="#fff"/><rect x="512.06564" y="216.65602" width="26.93216" height="26.93216" fill="#e6e6e6"/><rect x="555.45634" y="216.65602" width="26.93216" height="26.93216" fill="#e6e6e6"/><rect x="598.84704" y="216.65602" width="26.93216" height="26.93216" fill="#e6e6e6"/><rect x="512.81376" y="278.00149" width="26.93216" height="26.93216" fill="#e6e6e6"/><rect x="556.20446" y="278.00149" width="26.93216" height="26.93216" fill="#e6e6e6"/><rect x="599.59516" y="278.00149" width="26.93216" height="26.93216" fill="#e6e6e6"/><rect x="513.56187" y="339.34697" width="26.93216" height="26.93216" fill="#e6e6e6"/><rect x="556.95257" y="339.34697" width="26.93216" height="26.93216" fill="#e6e6e6"/><rect x="600.34327" y="339.34697" width="26.93216" height="26.93216" fill="#e6e6e6"/><rect x="514.30999" y="400.69244" width="26.93216" height="26.93216" fill="#e6e6e6"/><rect x="557.70069" y="400.69244" width="26.93216" height="26.93216" fill="#e6e6e6"/><rect x="601.09139" y="400.69244" width="26.93216" height="26.93216" fill="#e6e6e6"/><rect x="514.30999" y="400.69244" width="26.93216" height="26.93216" fill="#e6e6e6"/><rect x="557.70069" y="400.69244" width="26.93216" height="26.93216" fill="#e6e6e6"/><rect x="601.09139" y="400.69244" width="26.93216" height="26.93216" fill="#e6e6e6"/><circle cx="250.52809" cy="345.96177" r="37.11924" fill="#fff"/><polygon points="250.63 345.962 250.732 345.962 252.568 451.201 248.693 451.201 250.63 345.962" fill="#fff"/><rect x="411.08477" y="514.49403" width="1.83557" height="6.93436" transform="translate(520.28041 -201.77318) rotate(62.23413)" fill="#fff"/><circle cx="359.65787" cy="291.16612" r="56.44638" fill="#fff"/><polygon points="359.813 291.166 359.968 291.166 362.759 451.201 356.867 451.201 359.813 291.166" fill="#fff"/><rect x="521.48886" y="488.15814" width="2.7913" height="10.54493" transform="translate(557.80082 -312.99083) rotate(62.23413)" fill="#fff"/><path d="M401.34412,351.13985l9.53553-7.6266c-7.40773-.81727-10.45143,3.22274-11.69709,6.42045-5.78722-2.40307-12.0873.74628-12.0873.74628l19.07883,6.92629A14.43734,14.43734,0,0,0,401.34412,351.13985Z" transform="translate(-158.10925 -113.87316)" fill="#fff"/><path d="M501.81963,288.99005l9.53553-7.6266c-7.40773-.81727-10.45143,3.22274-11.69709,6.42045-5.78722-2.40307-12.0873.74628-12.0873.74628l19.07884,6.92629A14.43742,14.43742,0,0,0,501.81963,288.99005Z" transform="translate(-158.10925 -113.87316)" fill="#fff"/><path d="M463.49392,348.03236l9.53553-7.6266c-7.40773-.81727-10.45143,3.22274-11.69709,6.42045-5.78722-2.40307-12.0873.74628-12.0873.74628l19.07884,6.92629A14.43742,14.43742,0,0,0,463.49392,348.03236Z" transform="translate(-158.10925 -113.87316)" fill="#fff"/><rect x="164.39756" y="421.58281" width="555.20488" height="45.57652" fill="#e6e6e6"/><path d="M239.5822,654.09443s-112.306-51.70031-72.853-87.55226S239.5822,654.09443,239.5822,654.09443Z" transform="translate(-158.10925 -113.87316)" fill="#e6e6e6"/><path d="M237.62748,666.1582s-51.62-169.6065,24.39237-161.49519S237.62748,666.1582,237.62748,666.1582Z" transform="translate(-158.10925 -113.87316)" fill="#e6e6e6"/><path d="M199.99079,651.11615l2.16658,28.37159.03437.49006a130.35307,130.35307,0,0,0,.67063,13.26586c2.94031,28.939,15.57857,42.12751,30.349,42.12751s26.85842-13.18852,29.79874-42.12751a130.356,130.356,0,0,0,.67062-13.26586l.01721-.3955.00856-.09456,2.17518-28.37159Z" transform="translate(-158.10925 -113.87316)" fill="#e6e6e6"/><path d="M263.70649,679.48774l-.00856.09456-.01721.3955a130.356,130.356,0,0,1-.67062,13.26586H202.86237a130.35307,130.35307,0,0,1-.67063-13.26586l-.03437-.49006Z" transform="translate(-158.10925 -113.87316)" fill="#fff"/><path d="M991.00534,654.09443s-112.306-51.70031-72.853-87.55226S991.00534,654.09443,991.00534,654.09443Z" transform="translate(-158.10925 -113.87316)" fill="#e6e6e6"/><path d="M989.05061,666.1582s-51.62-169.6065,24.39237-161.49519S989.05061,666.1582,989.05061,666.1582Z" transform="translate(-158.10925 -113.87316)" fill="#e6e6e6"/><path d="M951.41393,651.11615l2.16658,28.37159.03437.49006a130.35311,130.35311,0,0,0,.67062,13.26586c2.94032,28.939,15.57858,42.12751,30.349,42.12751s26.85843-13.18852,29.79874-42.12751a130.35307,130.35307,0,0,0,.67063-13.26586l.01721-.3955.00855-.09456,2.17518-28.37159Z" transform="translate(-158.10925 -113.87316)" fill="#e6e6e6"/><path d="M1015.12962,679.48774l-.00855.09456-.01721.3955a130.35307,130.35307,0,0,1-.67063,13.26586H954.2855a130.35311,130.35311,0,0,1-.67062-13.26586l-.03437-.49006Z" transform="translate(-158.10925 -113.87316)" fill="#fff"/><path d="M841.89151,756.80505l-7.36292.8647c-5.81584,3.50648-12.642,4.82649-20.20218,4.55778a6.0584,6.0584,0,0,1-5.132-3.14495h0a6.004,6.004,0,0,1,3.91692-8.70765l5.59465-1.3031,13.49993-13.2034,8.14424-14.73959,11.83011,1.35673,2.46276,18.722h0A14.49192,14.49192,0,0,1,841.89151,756.80505Z" transform="translate(-158.10925 -113.87316)" fill="#ffb8b8"/><path d="M727.21733,747.33326l-7.21645,1.698c-5.37845,4.14629-12.00974,6.23546-19.55132,6.82989a6.0584,6.0584,0,0,1-5.45694-2.53974h0a6.004,6.004,0,0,1,2.89929-9.09723l5.40974-1.93205,11.90765-14.65557L721.6211,712.065h11.90765l4.57987,18.31946h0A14.49193,14.49193,0,0,1,727.21733,747.33326Z" transform="translate(-158.10925 -113.87316)" fill="#ffb8b8"/><path d="M721.30136,713.10082l13.46579,2.07166,21.23452-107.2084,36.772-62.66772,44.54069,182.30608,16.57328,3.10749c-1.85841-102.66356,7.21225-231.91222-13.46579-247.56337l-90.11721,10.3583L710.94306,599.15952Z" transform="translate(-158.10925 -113.87316)" fill="#2f2e41"/><circle cx="628.4494" cy="178.68068" r="31.0749" fill="#ffb8b8"/><polygon points="671.954 226.329 634.664 232.544 625.342 199.397 652.273 191.111 671.954 226.329" fill="#ffb8b8"/><path d="M845.601,487.28988l-99.43968,9.32247c7.972-27.7204,15.276-55.34331,9.32247-82.8664-7.56022-24.57156-.26306-39.18354,19.68077-50.75567l13.46579-30.03907,36.25405-4.14332,0,0A78.25619,78.25619,0,0,1,835.9919,380.558C830.82605,419.7362,832.2211,456.09141,845.601,487.28988Z" transform="translate(-158.10925 -113.87316)" fill="#f9a826"/><path d="M785.859,255.85269c-10.37095,2.36941-22.17487,5.72663-22.83677,8.84705-10.66833,2.68829-18.72067,9.12766-20.36486,18.94463a5.8793,5.8793,0,0,0,5.89829,6.81817c5.80171-.07473,14.51125-.6304,20.26246-3.03248,16.70684,10.7648,19.51113,38.763,12.21507,57.82087l11.48124-1.0524,11.87807-34.77172,3.03391,33.40489,26.20007-3.46416-3.37468-42.59722a63.46522,63.46522,0,0,0-9.96667-28.14221,23.96606,23.96606,0,0,0-1.87524-2.42946A33.29986,33.29986,0,0,0,785.859,255.85269Z" transform="translate(-158.10925 -113.87316)" fill="#2f2e41"/><path d="M720.0549,767.48915a3.64951,3.64951,0,0,0,3.58967,4.05234l11.65269.11981a2.48493,2.48493,0,0,0,2.312-2.47891h0a2.48494,2.48494,0,0,0-1.562-2.30721l-3.438-1.37518-5-7h-4a18.32116,18.32116,0,0,0-3.55216,8.96941l-.00219.01974Z" transform="translate(-158.10925 -113.87316)" fill="#ffb8b8"/><path d="M692.1636,767.48915a3.64951,3.64951,0,0,1-3.58967,4.05234l-11.65269.11981a2.48493,2.48493,0,0,1-2.312-2.47891h0a2.48493,2.48493,0,0,1,1.56206-2.30721L679.60925,765.5l5-7h4a18.32106,18.32106,0,0,1,3.55216,8.96941l.00219.01974Z" transform="translate(-158.10925 -113.87316)" fill="#ffb8b8"/><polygon points="525.5 644.627 531.5 644.627 552.5 553.627 563.5 645.627 570.5 645.627 580 527.127 531.5 526.627 525.5 644.627" fill="#3f3d56"/><path d="M656.60925,591.5h8v-19l1.81991-3.63981a5.18356,5.18356,0,0,0-3.84813-7.44145h0a5.18358,5.18358,0,0,0-5.97177,5.1233V591.5Z" transform="translate(-158.10925 -113.87316)" fill="#ffb8b8"/><circle cx="546" cy="412.12684" r="18.5" fill="#ffb8b8"/><rect x="696.60925" y="535.5" width="19" height="22" transform="translate(1254.10925 979.12684) rotate(-180)" fill="#ffb8b8"/><path d="M687.60925,643.5c16.81763,10.37839,34.59827,9.36365,53,1l-4-93-21-1-22,3-11,9Z" transform="translate(-158.10925 -113.87316)" fill="#f9a826"/><polygon points="509.5 496.627 531.5 479.627 524.5 448.627 511.5 472.627 507.5 468.627 495.5 477.627 509.5 496.627" fill="#f9a826"/><path d="M765.26522,553.097l-6.99717,3.87809-9.21047-16.61828-3.35622-2.30132a5.18357,5.18357,0,0,1-.24158-8.37407h0a5.18357,5.18357,0,0,1,7.70676,1.58618l2.8882,5.21112Z" transform="translate(-158.10925 -113.87316)" fill="#ffb8b8"/><polygon points="568 467.127 594.551 453.032 608.5 445.627 610.5 433.627 601.5 424.627 590.5 431.627 591.5 439.627 578.5 437.627 568 467.127" fill="#f9a826"/><circle cx="550" cy="405.12684" r="22" fill="#2f2e41"/><circle cx="562" cy="380.12684" r="10" fill="#2f2e41"/><path d="M719.6243,502.36044a9.99733,9.99733,0,0,0,12.83441-14.57A9.99422,9.99422,0,1,1,718.238,501.47266,10.02019,10.02019,0,0,0,719.6243,502.36044Z" transform="translate(-158.10925 -113.87316)" fill="#2f2e41"/><path d="M781.3795,518.36478l.68709,24.048a13.11173,13.11173,0,0,1-11.80171,13.42112h0a13.11172,13.11172,0,0,1-13.96224-16.46762l5.39612-19.96565,15.53745-84.93806-1.03583-49.71984,33.14656-1.03583-6.215,55.93482Z" transform="translate(-158.10925 -113.87316)" fill="#ffb8b8"/><path d="M811.41857,388.886a52.381,52.381,0,0,0-37.28988,0l2.07166-41.43322a16.57327,16.57327,0,0,1,16.57327-16.57326h0a16.57326,16.57326,0,0,1,16.57326,16.57326Z" transform="translate(-158.10925 -113.87316)" fill="#f9a826"/></svg>
        </div>
    </div>
    <div class="flex flex-wrap flex-col-reverse sm:flex-row">
        <div class="w-full sm:w-1/2 p-6 mt-6">
            <svg class="w-5/6 sm:h-64 mx-auto" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" width="670" height="711.55591" viewBox="0 0 670 711.55591" xmlns:xlink="http://www.w3.org/1999/xlink"><title>play time</title><path d="M818.5,782.778c-15.39392,0-30.0871.29541-43.53882.83081A2.072,2.072,0,0,0,775,783.278c0-4.66742-16.02979-8.93048-42.46613-12.18531,77.85541-4.22778,130.04364-11.99011,130.04364-20.86767,0-13.39685-118.82458-24.25714-265.40216-24.25714s-265.4021,10.86029-265.4021,24.25714c0,2.49841,4.13709,4.90838,11.81147,7.17633C297.85876,758.95417,265,763.23706,265,768.278c0,6.35125,52.15881,11.5,116.5,11.5,20.59656,0,39.94019-.52832,56.7287-1.4541-4.05335,1.5769-6.2287,3.238-6.2287,4.9541,0,10.21722,76.78314,18.5,171.5,18.5,39.35321,0,75.60321-1.43085,104.54388-3.83515C723.54547,802.49707,767.1402,805.778,818.5,805.778c64.34119,0,116.5-5.14875,116.5-11.5S882.84119,782.778,818.5,782.778Z" transform="translate(-265 -94.22204)" fill="#3f3d56"/><path d="M361.03917,716.33341c6.70634,24.79067,29.67707,40.14415,29.67707,40.14415s12.0976-24.84013,5.39126-49.63079-29.67707-40.14415-29.67707-40.14415S354.33283,691.54275,361.03917,716.33341Z" transform="translate(-265 -94.22204)" fill="#3f3d56"/><path d="M370.89366,711.00563c18.4023,17.9139,20.65,45.45172,20.65,45.45172s-27.58832-1.50633-45.99061-19.42023-20.65-45.45172-20.65-45.45172S352.49136,693.09174,370.89366,711.00563Z" transform="translate(-265 -94.22204)" fill="#f9a826"/><path d="M602.58251,183.72593s2.11192,2.42027-1.50669,7.1032-.69665,14.84439,6.17815,15.10326,10.20865,3.13823,8.55123,6.93116-3.64908,12.80555,3.83783,11.43518,9.85312,1.61024,8.52764,3.90107,3.33844-4.55578,3.33844-4.55578,4.17207,6.2155,9.29278,1.86451,7.15661-43.79163-3.28274-44.46011S602.58251,183.72593,602.58251,183.72593Z" transform="translate(-265 -94.22204)" fill="#2f2e41"/><polygon points="390.505 277.066 392.884 293.718 403.59 293.718 400.021 274.687 390.505 277.066" fill="#9f616a"/><path d="M669.779,377.82992s14.27365,13.08418,10.70524,14.27365-16.65259,15.46312-19.03153,16.65259c-2.12779,1.06389-24.97889,8.32629-21.41048,0S651.937,395.672,651.937,395.672l2.37894-14.27365Z" transform="translate(-265 -94.22204)" fill="#f2f2f2"/><path d="M669.779,377.82992s14.27365,13.08418,10.70524,14.27365-16.65259,15.46312-19.03153,16.65259c-2.12779,1.06389-24.97889,8.32629-21.41048,0S651.937,395.672,651.937,395.672l2.37894-14.27365Z" transform="translate(-265 -94.22204)" opacity="0.1"/><polygon points="404.779 264.576 407.158 281.229 417.863 281.229 414.295 262.197 404.779 264.576" fill="#9f616a"/><path d="M625.04743,314.594,640.637,263.046s-26.16836-23.78942-8.3263-30.92624,22.59995,28.5473,22.59995,28.5473l-5.94736,61.85248H625.17387Z" transform="translate(-265 -94.22204)" fill="#ffb8b8"/><path d="M661.45273,276.72489s-30.74222,39.4299-26.07635,45.28857,12.99217,41.54281,12.99217,41.54281-1.18947,14.27365,3.56841,14.27365,16.65259-2.379,16.65259-5.94736-10.70524-48.7683-10.70524-48.7683l30.92625-40.442Z" transform="translate(-265 -94.22204)" fill="#f9a826"/><path d="M663.83167,279.10384l30.92624-16.6526s21.41048,10.70524,15.46312,20.221-33.30518,34.49465-33.30518,34.49465,8.32629,40.442,7.13682,41.63148-14.27365,5.94736-17.84206,4.75789-22.59995-47.57884-17.84206-49.95778,20.221-27.35783,20.221-27.35783Z" transform="translate(-265 -94.22204)" fill="#f9a826"/><path d="M579.37924,715.63964s21.41047,13.08417,23.78942,13.08417,34.49465,8.3263,20.221,14.27365-68.98931-2.37894-67.79984-5.94735,0-24.97889,2.37894-24.97889S579.37924,715.63964,579.37924,715.63964Z" transform="translate(-265 -94.22204)" fill="#2f2e41"/><path d="M603.16866,732.29223s21.41047,13.08418,23.78941,13.08418,34.49466,8.32629,20.221,14.27365-68.98931-2.379-67.79984-5.94736,0-24.97889,2.37894-24.97889S603.16866,732.29223,603.16866,732.29223Z" transform="translate(-265 -94.22204)" fill="#2f2e41"/><path d="M580.56871,480.12441s3.56841,17.84206,9.51577,30.92624-1.18947,74.93666-4.75789,84.45243-38.06306,122.5155-27.35783,123.705,32.11572,0,32.11572,0L624.57913,610.9662l-5.94735-145.11544Z" transform="translate(-265 -94.22204)" fill="#575a88"/><path d="M580.56871,480.12441s3.56841,17.84206,9.51577,30.92624-1.18947,74.93666-4.75789,84.45243-38.06306,122.5155-27.35783,123.705,32.11572,0,32.11572,0L624.57913,610.9662l-5.94735-145.11544Z" transform="translate(-265 -94.22204)" opacity="0.1"/><path d="M587.70553,481.31388s4.75789,32.11571,15.46313,39.25254,7.13682,14.27365,7.13682,14.27365l-4.75788,63.042s-46.38937,114.1892-32.11572,128.46285,27.35783,8.3263,33.30519,7.13683,16.65259-26.16836,10.70524-33.30519,11.8947-49.95777,16.65259-57.0946,0-16.65259,5.94735-19.03153,19.03153-17.84206,19.03153-28.5473,16.6526-124.89444,5.94736-132.03126-79.325,14.72982-79.325,14.72982Z" transform="translate(-265 -94.22204)" fill="#575a88"/><circle cx="300.10559" cy="194.39756" r="26.16836" fill="#ffb8b8"/><circle cx="359.57913" cy="99.23989" r="21.41048" fill="#9f616a"/><path d="M582.94765,288.6196S597.2213,314.788,604.35813,314.788s-28.5473,27.35783-28.5473,27.35783-11.89471-34.49465-14.27365-35.68412S582.94765,288.6196,582.94765,288.6196Z" transform="translate(-265 -94.22204)" fill="#ffb8b8"/><path d="M587.70553,312.409s-30.92624,10.70524-29.73677,14.27365-8.32629,11.89471-8.32629,15.46312-2.37894,35.68413,11.89471,61.85248,36.87359,45.1999,26.16835,57.09461-27.35782,32.11571-9.51576,32.11571,46.38936-26.16836,72.55772-16.65259,20.221-26.16836,20.221-26.16836,3.56842-27.35783-3.56841-35.68413-32.11571-67.79984-32.11571-74.93666S611.495,305.27219,605.5476,305.27219,587.70553,312.409,587.70553,312.409Z" transform="translate(-265 -94.22204)" fill="#8985a8"/><path d="M624.57913,206.54612" transform="translate(-265 -94.22204)" fill="none" stroke="#2f2e41" stroke-miterlimit="10"/><path d="M630.52648,206.54612s9.6859,18.41584,10.19557,21.69736,17.16226-21.69736,17.16226-21.69736l-19.03153-13.08418Z" transform="translate(-265 -94.22204)" fill="#9f616a"/><path d="M634.0949,220.81977l20.221-21.41048,23.78942,10.70524s22.18674,48.7683,23.58281,52.33671-35.47752,20.221-39.04593,20.221-28.5473-36.8736-28.5473-36.8736S628.14754,227.95659,634.0949,220.81977Z" transform="translate(-265 -94.22204)" fill="#f2f2f2"/><polygon points="359.579 155.145 359.579 176.555 373.853 176.555 369.158 155.145 359.579 155.145" fill="#9f616a"/><path d="M632.72307,265.42492a8.8714,8.8714,0,0,0-8.37932,5.63254c-.92982,2.51473-.61424,5.15766,3.80379,6.26217,9.51577,2.37894,10.70524,0,10.70524,0s16.51883-2.37894,13.0173-7.13682-13.0173-4.75789-13.0173-4.75789Z" transform="translate(-265 -94.22204)" fill="#9f616a"/><path d="M684.05267,368.31415s14.27365,13.08418,10.70524,14.27365-16.65259,15.46312-19.03153,16.65259c-2.12779,1.0639-24.97889,8.3263-21.41048,0s11.89471-13.08418,11.89471-13.08418l2.37894-14.27365Z" transform="translate(-265 -94.22204)" fill="#f2f2f2"/><path d="M555.78188,268.47644c1.63718-.95935,3.57076-2.15416,3.61752-4.05113a3.58612,3.58612,0,0,0-2.35145-3.15015,10.52841,10.52841,0,0,0-4.11049-.55393,5.35013,5.35013,0,0,0-1.58915.15751c-1.3549.41791-2.13544,1.7936-3.20261,2.72716-1.54961,1.3556-3.684,1.75431-5.677,2.27094a37.16509,37.16509,0,0,0-9.51449,3.943,4.46217,4.46217,0,0,0-1.50585,1.23882,6.07545,6.07545,0,0,0-.605,3.07885c-.26851,4.03572-2.6881,7.54864-4.4944,11.16753s-2.993,8.12707-.87287,11.57154a39.39945,39.39945,0,0,1,2.3526,3.33963c1.50253,3.13092-.37279,6.986.71281,10.28475a8.99469,8.99469,0,0,0,2.27743,3.41467,18.09632,18.09632,0,0,0,7.49482,4.53791c2.703.83229,6.05663,1.38693,7.11528,4.0096.45414,1.12507.36147,2.45057,1.00217,3.48087.79368,1.27632,2.43,1.68861,3.9081,1.96081a16.7011,16.7011,0,0,0,5.06294.36641,6.28235,6.28235,0,0,0,4.36733-2.33778,12.77109,12.77109,0,0,1,1.76834-2.60783c1.72227-1.43941,4.33833-.30248,6.55026-.68389a4.79087,4.79087,0,0,0,3.754-3.52358,6.67018,6.67018,0,0,1,.762-2.69281c1.37364-1.7578,4.988-.51687,5.895-2.55507.58931-1.3244-.64362-2.72358-1.83578-3.54825-1.94388-1.34467-4.11694-2.37892-5.86037-3.97495s-3.03331-3.98395-2.48745-6.28371c.8186-3.44883,5.32145-5.34781,5.47064-8.88932.08546-2.02883-1.37247-3.80928-3.00464-5.01736s-3.52345-2.0761-4.98244-3.48847c-1.06648-1.03239-1.87065-2.328-3.03-3.25488-2.09654-1.67627-4.96525-1.87957-7.6355-2.15365-1.43229-.147-7.14553-.80866-6.92077-2.99039C548.39951,272.45731,554.32808,269.32834,555.78188,268.47644Z" transform="translate(-265 -94.22204)" fill="#2f2e41"/><path d="M634.0949,219.63029s-13.08418,4.75789-13.08418,10.70524-5.94736,24.97889,0,24.97889,17.84206-4.56588,17.84206-4.56588Z" transform="translate(-265 -94.22204)" fill="#f2f2f2"/><path d="M630.52648,305.27219s34.49466-11.8947,35.68413-11.8947,17.84206-9.51577,16.65259-13.08418l-4.75788-29.73677S659.07378,211.304,672.158,211.304s20.221,30.92624,20.221,30.92624,28.5473,53.52619,13.08418,65.4209-79.69455,33.30518-83.263,29.73677S630.52648,305.27219,630.52648,305.27219Z" transform="translate(-265 -94.22204)" fill="#ffb8b8"/><path d="M663.83167,227.95659l8.02893,7.73723-10.40787,10.10483s-14.27365-5.94735-13.08418-2.37894,8.32629,14.27365,13.08418,14.27365,29.52053-15.46312,29.62865-20.221-15.355-21.41048-18.92342-22.6S663.83167,227.95659,663.83167,227.95659Z" transform="translate(-265 -94.22204)" fill="#9f616a"/><path d="M648.7346,219.66537s17.476,15.42805,19.855,15.42805,6.70539-23.18017,6.70539-23.18017-14.10046-9.18743-19.324-6.68255S648.7346,219.66537,648.7346,219.66537Z" transform="translate(-265 -94.22204)" fill="#f2f2f2"/><path d="M587.70553,319.54584s0-16.65259,35.68413-16.65259h15.46312L631.716,342.14579l-23.78942,7.13683Z" transform="translate(-265 -94.22204)" fill="#8985a8"/><path d="M665.653,184.78426a92.36944,92.36944,0,0,1-10.46333-.64525c-2.72736-6.59088-6.201-12.12116-9.95862-14.183-2.66689-2.3863-6.78011-4.12048-10.00743-5.4916-7.92548-3.367-21.11881-1.26691-21.89009,2.56237-15.59522,7.45178-11.65432,20.53836-11.65432,20.53836,2.42317,5.12218,7.85947,2.85206,12.47141.53242,1.17775,3.7131,3.95956,6.8642,7.94217,7.01416,7.6159.28676,11.30915,3.47651,9.47305,7.67836s-4.04246,14.186,4.25154,12.66786,10.91531,1.78384,9.44692,4.32163,3.69834-5.04691,3.69834-5.04691,4.6218,6.88555,10.29453,2.06552a4.30531,4.30531,0,0,0,1.18181-2.02451c2.638,1.13535,4.7274,1.56631,5.9138,1.0355,6.79483-3.04016,2.57494-10.17906,2.57494-10.17906s9.07116-1.39157,6.14826-1.16089-4.77194-3.55809.17384-10.387S670.23584,184.93923,665.653,184.78426Z" transform="translate(-265 -94.22204)" fill="#2f2e41"/><rect x="614.46863" y="178.59355" width="3.56841" height="10.70524" transform="translate(-175.3885 -279.40004) rotate(18.40679)" fill="#f9a826"/><path d="M409.0545,369.54233c-46.27672.21329-83.94415.897-83.94415.897S369.884,311.13208,408.88658,333.105s83.80663,36.562,83.80663,36.562S455.33123,369.329,409.0545,369.54233Z" transform="translate(-265 -94.22204)" fill="#f2f2f2"/><path d="M742.0545,135.54233c-46.27672.21329-83.94415.897-83.94415.897S702.884,77.13208,741.88658,99.105,825.69321,135.667,825.69321,135.667,788.33123,135.329,742.0545,135.54233Z" transform="translate(-265 -94.22204)" fill="#f2f2f2"/><path d="M818.9455,386.54233c46.27672.21329,83.94415.897,83.94415.897S858.116,328.13208,819.11342,350.105s-83.80663,36.562-83.80663,36.562S772.66877,386.329,818.9455,386.54233Z" transform="translate(-265 -94.22204)" fill="#f2f2f2"/></svg>
        </div>
        <div class="w-full sm:w-1/2 p-6 mt-6 flex flex-wrap content-center">
            <div class="align-middle">
            <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                Mengapa Parenthink??
            </h3>
            <p class="text-gray-600 mb-8">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse ab eos labore nostrum sequi quisquam. Illo at odio similique, id quod suscipit, temporibus aperiam commodi eveniet cupiditate tempora, facere sit accusantium possimus vero quas. Dolorum qui enim at eos ratione, unde facere adipisci reprehenderit nesciunt sunt illum sit et cupiditate obcaecati similique. Fuga officiis amet rerum fugit atque dolorem provident maiores mollitia fugiat excepturi, eveniet rem quasi magni omnis animi nemo obcaecati incidunt hic adipisci minima nisi quaerat dolores. Nisi velit omnis voluptas natus nobis id nulla at! Quasi nulla eaque expedita quae explicabo consequuntur cum harum id dolorum ipsam optio 
                <br />
                <br />
            </p>
            </div>
        </div>
    </div>
    </div>
    <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 400" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150"><path d="M 0,400 C 0,400 0,200 0,200 C 118.66666666666663,236.93333333333334 237.33333333333326,273.8666666666667 414,271 C 590.6666666666667,268.1333333333333 825.3333333333335,225.46666666666667 1006,207 C 1186.6666666666665,188.53333333333333 1313.3333333333333,194.26666666666665 1440,200 C 1440,200 1440,400 1440,400 Z" stroke="none" stroke-width="0" fill="#fde68a" fill-opacity="1" class="transition-all duration-300 ease-in-out delay-150 path-0"></path></svg>
    <div class="bg-amber-200">
      <h1 class="w-full text-5xl font-bold leading-tight text-center text-gray-800">
        Features
      </h1>
      <div class="flex justify-center">
        <div class="w-44 h-1 bg-white opacity-70 rounded-sm mr-1" ></div>
        <div class="w-10 h-1 bg-white opacity-70 rounded-sm" ></div>
      </div>
      <div  class="w-5/6 m-auto">
        <div class="flex justify-around mt-10">
          <div class="bg-white p-6 rounded-lg w-1/4 shadow-lg">
            <h2 class="text-2xl font-bold mb-2 text-amber-500">Forum Diskusi</h2>
            <p class="text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, earum.</p>
            <a href="/chat" class="text-amber-600 hover:text-amber-500 underline text-sm">More 👉</a>
          </div>
          <div class="bg-white p-6 rounded-lg w-1/4 shadow-lg">
            <h2 class="text-2xl font-bold mb-2 text-amber-500">Konsultasi Ahli</h2>
            <p class="text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, earum.</p>
            <a href="/chat" class="text-amber-600 hover:text-amber-500 underline text-sm">More 👉</a>
          </div>
          <div class="bg-white p-6 rounded-lg w-1/4 shadow-lg">
            <h2 class="text-2xl font-bold mb-2 text-amber-500">Kirim Cerita</h2>
            <p class="text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, earum.</p>
            <a href="#" class="text-amber-600 hover:text-amber-500 underline text-sm">More 👉</a>
          </div>
        </div>
      </div>
    </div>
    <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 400" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150"><path d="M 0,400 C 0,400 0,200 0,200 C 145.59999999999997,209.46666666666667 291.19999999999993,218.93333333333334 447,205 C 602.8000000000001,191.06666666666666 768.8,153.73333333333335 936,149 C 1103.2,144.26666666666665 1271.6,172.13333333333333 1440,200 C 1440,200 1440,400 1440,400 Z" stroke="none" stroke-width="0" fill="#fde68a" fill-opacity="1" class="transition-all duration-300 ease-in-out delay-150 path-0" transform="rotate(-180 720 200)"></path></svg>
    <div class>
    <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
      Artikel
    </h1>
    <div class="flex justify-center">
      <div class="w-10 h-1 bg-amber-300 opacity-40 rounded-sm mr-1" ></div>
      <div class="w-44 h-1 bg-amber-300 opacity-40 rounded-sm" ></div>
    </div class="">
    <div class="mt-10 flex justify-around w-4/5 m-auto mb-10">
      <div class="bg-white rounded-lg shadow-lg w-2/5">
        <img src="https://images.unsplash.com/photo-1600054800747-be294a6a0d26?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1053&q=80" alt="" class="rounded-t-lg">
        <div class="p-6">
          <h2 class="font-bold mb-2 text-2xl text-amber-800">Card with an image
          </h2>
          <div class="flex justify-start">
            <div class="w-10 h-1 bg-amber-300 opacity-40 rounded-sm mr-1" ></div>
            <div class="w-44 h-1 bg-amber-300 opacity-40 rounded-sm" ></div>
            <div class="w-5 h-1 bg-amber-300 opacity-40 rounded-sm ml-1" ></div>
          </div class="">
          <p class="text-amber-700 mb-2">This is a little bit better of a card!</p>
          <a href="#" class="text-amber-600 hover:text-amber-500 underline text-sm">Read More 👉</a>
        </div>
      </div>
      <div class="bg-white rounded-lg shadow-lg w-2/5">
        <img src="https://images.unsplash.com/photo-1600054800747-be294a6a0d26?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1053&q=80" alt="" class="rounded-t-lg">
        <div class="p-6">
          <h2 class="font-bold mb-2 text-2xl text-amber-800">Card with an image
          </h2>
          <div class="flex justify-start">
            <div class="w-10 h-1 bg-amber-300 opacity-40 rounded-sm mr-1" ></div>
            <div class="w-44 h-1 bg-amber-300 opacity-40 rounded-sm" ></div>
            <div class="w-5 h-1 bg-amber-300 opacity-40 rounded-sm ml-1" ></div>
          </div class="">
          <p class="text-amber-700 mb-2">This is a little bit better of a card!</p>
          <a href="#" class="text-amber-600 hover:text-amber-500 underline text-sm">Read More 👉</a>
        </div>
      </div>
    </div>
    <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 400" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150"><path d="M 0,400 C 0,400 0,200 0,200 C 118.66666666666663,236.93333333333334 237.33333333333326,273.8666666666667 414,271 C 590.6666666666667,268.1333333333333 825.3333333333335,225.46666666666667 1006,207 C 1186.6666666666665,188.53333333333333 1313.3333333333333,194.26666666666665 1440,200 C 1440,200 1440,400 1440,400 Z" stroke="none" stroke-width="0" fill="#fde68a" fill-opacity="1" class="transition-all duration-300 ease-in-out delay-150 path-0"></path></svg>
    <div class="h-24 bg-amber-200 text-center text-lg">
      <h1>© Copyright 2022 All Right Reserved</h1>
    </div>
  </div>

  <script>
    const button = document.querySelector('#menu-button');
    const menu = document.querySelector('#menu');


    button.addEventListener('click', () => {
      menu.classList.toggle('hidden');
    });

  </script>
  
</body>

</html>