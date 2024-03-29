<?php
			/*
				Template Name: Front
			*/

			?>
<!DOCTYPE html>
<html dir="ltr" lang="es-ES">
  <head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta charset="utf-8">
    <title><?php  wp_title( '|', true, 'right' );  ?>
</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link href="<?php  bloginfo('template_url');  ?>/assets/css/styles.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800%7COswald:400,700" rel="stylesheet">
  <?php  wp_head();  ?>
</head>
  <body class="home">
    <div style="display: none;" class="sprite">
<svg xmlns="http://www.w3.org/2000/svg"><symbol id="arrow-left" viewbox="0 0 14 12"><title><?php  wp_title( '|', true, 'right' );  ?>
</title>
<path d="M.751 5.368L5.981.235a.828.828 0 0 1 1.155 0c.32.313.32.82 0 1.134L3.302 5.133h9.88a.81.81 0 0 1 .818.802.81.81 0 0 1-.817.801H3.302L7.136 10.5c.32.313.32.82 0 1.134a.822.822 0 0 1-.577.235.822.822 0 0 1-.578-.235L.75 6.502a.791.791 0 0 1 0-1.134" fill-rule="evenodd"></path></symbol><symbol id="arrow-right" viewbox="0 0 14 12"><title><?php  wp_title( '|', true, 'right' );  ?>
</title>
<path d="M13.249 5.368L8.019.235a.828.828 0 0 0-1.155 0 .791.791 0 0 0 0 1.134l3.834 3.764H.818A.81.81 0 0 0 0 5.935a.81.81 0 0 0 .817.801h9.881L6.864 10.5a.791.791 0 0 0 0 1.134c.16.157.368.235.577.235.21 0 .419-.078.578-.235l5.23-5.132a.791.791 0 0 0 0-1.134" fill-rule="evenodd"></path></symbol><symbol id="barcode" viewbox="0 0 14 12"><title><?php  wp_title( '|', true, 'right' );  ?>
</title>
<g fill-rule="evenodd"><path d="M.052 11.376h1.35V.175H.052zM4.2 11.376h2.1V.175H4.2zM10.5 11.376h.7V.175h-.7zM2.8 11.376h.7V.175h-.7zM12.598 11.376H14V.175h-1.402zM7.7 11.376h1.4V.175H7.7z"></path></g></symbol><symbol id="blog" viewbox="0 0 14 18"><title><?php  wp_title( '|', true, 'right' );  ?>
</title>
<path d="M11.88 0h-9.9C.891 0 0 .891 0 1.98v13.861c0 1.09.892 1.98 1.98 1.98h9.9c1.09 0 1.98-.891 1.98-1.98V1.98A1.985 1.985 0 0 0 11.88 0zM2.782 4.128h8.293V5.86H2.782V4.128zm8.293 9.505H2.782v-1.732h8.293v1.732zm.025-3.861H2.808V7.99H11.1v1.782z" fill-rule="evenodd"></path></symbol><symbol id="cart" viewbox="0 0 14 14"><title><?php  wp_title( '|', true, 'right' );  ?>
</title>
<path d="M4.2 11.2c-.768 0-1.4.63-1.4 1.398 0 .773.632 1.402 1.4 1.402.77 0 1.398-.63 1.398-1.402 0-.768-.628-1.397-1.397-1.397zM0 0v1.402h1.402L3.92 6.72l-.98 1.682c-.07.208-.14.488-.14.696 0 .773.632 1.402 1.4 1.402h8.398V9.098H4.481a.148.148 0 0 1-.14-.14V8.89L4.97 7.7h5.182c.556 0 .977-.28 1.189-.7l2.519-4.55c.14-.14.14-.21.14-.352 0-.416-.28-.696-.7-.696H2.94L2.31 0H0zm11.2 11.2c-.768 0-1.4.63-1.4 1.398 0 .773.632 1.402 1.4 1.402.77 0 1.398-.63 1.398-1.402 0-.768-.628-1.397-1.397-1.397z" fill-rule="evenodd"></path></symbol><symbol id="chevron-down-blue" viewbox="0 0 17 10"><title><?php  wp_title( '|', true, 'right' );  ?>
</title>
<path d="M15.153 1.549a.587.587 0 0 1 .827 0 .574.574 0 0 1 0 .818L9.3 8.981a.587.587 0 0 1-.827 0l-6.68-6.614a.574.574 0 0 1 0-.818.588.588 0 0 1 .827 0L8.886 7.58l6.267-6.031z" stroke="#3189C9" stroke-width="1.5" fill="#3189C9" fill-rule="evenodd"></path></symbol><symbol id="chevron-down-orange" viewbox="0 0 17 10"><title><?php  wp_title( '|', true, 'right' );  ?>
</title>
<path d="M15.153 1.549a.587.587 0 0 1 .827 0 .574.574 0 0 1 0 .818L9.3 8.981a.587.587 0 0 1-.827 0l-6.68-6.614a.574.574 0 0 1 0-.818.588.588 0 0 1 .827 0L8.886 7.58l6.267-6.031z" stroke="#F99109" stroke-width="1.5" fill="#F6F853" fill-rule="evenodd"></path></symbol><symbol id="chevron-down" viewbox="0 0 22 13"><title><?php  wp_title( '|', true, 'right' );  ?>
</title>
<path d="M3.112 1.079a1.608 1.608 0 0 0-2.259 0 1.567 1.567 0 0 0 0 2.235l9.018 8.838a1.608 1.608 0 0 0 2.258 0l9.018-8.838a1.567 1.567 0 0 0 0-2.235 1.61 1.61 0 0 0-2.259-.003l-7.89 7.249-7.886-7.246z" fill-rule="evenodd"></path></symbol><symbol id="chevron-left" viewbox="0 0 20 20"><path d="M12.452 4.516c.446.436.481 1.043 0 1.576L8.705 10l3.747 3.908c.481.533.446 1.141 0 1.574-.445.436-1.197.408-1.615 0-.418-.406-4.502-4.695-4.502-4.695a1.095 1.095 0 0 1 0-1.576s4.084-4.287 4.502-4.695 1.17-.436 1.615 0z"></path></symbol><symbol id="chevron-right" viewbox="0 0 20 20"><path d="M9.163 4.516c.418.408 4.502 4.695 4.502 4.695a1.095 1.095 0 0 1 0 1.576s-4.084 4.289-4.502 4.695c-.418.408-1.17.436-1.615 0-.446-.434-.481-1.041 0-1.574L11.295 10 7.548 6.092c-.481-.533-.446-1.141 0-1.576s1.197-.409 1.615 0z"></path></symbol><symbol id="close" viewbox="0 0 24 24"><path d="M17.016 15.609L13.407 12l3.609-3.609-1.406-1.406-3.609 3.609-3.609-3.609-1.406 1.406L10.595 12l-3.609 3.609 1.406 1.406 3.609-3.609 3.609 3.609zM12 2.016c5.531 0 9.984 4.453 9.984 9.984S17.531 21.984 12 21.984 2.016 17.531 2.016 12 6.469 2.016 12 2.016z"></path></symbol><symbol id="facebook" viewbox="0 0 19 32"><path d="M17.125.214v4.714h-2.804q-1.536 0-2.071.643T11.714 7.5v3.375h5.232l-.696 5.286h-4.536v13.554H6.25V16.161H1.696v-5.286H6.25V6.982q0-3.321 1.857-5.152T13.053 0q2.625 0 4.071.214z"></path></symbol><symbol id="flickr" viewbox="0 0 20 20"><path d="M5 14c-2.188 0-3.96-1.789-3.96-4S2.812 6 5 6c2.187 0 3.96 1.789 3.96 4S7.187 14 5 14zM15 14c-2.188 0-3.96-1.789-3.96-4S12.812 6 15 6c2.187 0 3.96 1.789 3.96 4s-1.773 4-3.96 4z"></path></symbol><symbol id="google" viewbox="0 0 20 20"><path d="M1.989 5.589c0 1.494.499 2.572 1.482 3.205.806.52 1.74.598 2.226.598.118 0 .213-.006.279-.01 0 0-.154 1.004.59 1.996h-.034c-1.289 0-5.493.269-5.493 3.727 0 3.516 3.861 3.695 4.636 3.695.061 0 .097-.002.097-.002.008 0 .063.002.158.002.497 0 1.782-.062 2.975-.643 1.548-.75 2.333-2.059 2.333-3.885 0-1.764-1.196-2.814-2.069-3.582-.533-.469-.994-.873-.994-1.266 0-.4.337-.701.762-1.082.689-.615 1.339-1.492 1.339-3.15 0-1.457-.189-2.436-1.354-3.057.121-.062.551-.107.763-.137.631-.086 1.554-.184 1.554-.699V1.2H6.64c-.046.002-4.651.172-4.651 4.389zm7.424 9.013c.088 1.406-1.115 2.443-2.922 2.574-1.835.135-3.345-.691-3.433-2.096-.043-.676.254-1.336.835-1.863.589-.533 1.398-.863 2.278-.928.104-.006.207-.012.31-.012 1.699.001 2.849.999 2.932 2.325zM8.212 4.626c.451 1.588-.23 3.246-1.316 3.553a1.417 1.417 0 0 1-.384.052c-.994 0-1.979-1.006-2.345-2.393-.204-.776-.187-1.458.047-2.112.229-.645.643-1.078 1.163-1.225.125-.035.254-.053.385-.053 1.2 0 1.972.498 2.45 2.178zM16 8V5h-2v3h-3v2h3v3h2v-3h3V8h-3z"></path></symbol><symbol id="home" viewbox="0 0 20 20"><path d="M18.672 11H17v6c0 .445-.194 1-1 1h-4v-6H8v6H4c-.806 0-1-.555-1-1v-6H1.328c-.598 0-.47-.324-.06-.748L9.292 2.22c.195-.202.451-.302.708-.312.257.01.513.109.708.312l8.023 8.031c.411.425.539.749-.059.749z"></path></symbol><symbol id="instagram" viewbox="0 0 27 32"><path d="M18.286 16q0-1.893-1.339-3.232t-3.232-1.339-3.232 1.339T9.144 16t1.339 3.232 3.232 1.339 3.232-1.339T18.286 16zm2.464 0q0 2.929-2.054 4.982t-4.982 2.054-4.982-2.054T6.678 16t2.054-4.982 4.982-2.054 4.982 2.054T20.75 16zm1.929-7.321q0 .679-.482 1.161t-1.161.482-1.161-.482-.482-1.161.482-1.161 1.161-.482 1.161.482.482 1.161zM13.714 4.75l-1.366-.009q-1.241-.009-1.884 0t-1.723.054-1.839.179-1.277.33q-.893.357-1.571 1.036T3.018 7.911q-.196.518-.33 1.277t-.179 1.839-.054 1.723 0 1.884T2.464 16t-.009 1.366 0 1.884.054 1.723.179 1.839.33 1.277q.357.893 1.036 1.571t1.571 1.036q.518.196 1.277.33t1.839.179 1.723.054 1.884 0 1.366-.009 1.366.009 1.884 0 1.723-.054 1.839-.179 1.277-.33q.893-.357 1.571-1.036t1.036-1.571q.196-.518.33-1.277t.179-1.839.054-1.723 0-1.884T24.964 16t.009-1.366 0-1.884-.054-1.723-.179-1.839-.33-1.277q-.357-.893-1.036-1.571t-1.571-1.036q-.518-.196-1.277-.33t-1.839-.179-1.723-.054-1.884 0-1.366.009zM27.429 16q0 4.089-.089 5.661-.179 3.714-2.214 5.75t-5.75 2.214q-1.571.089-5.661.089t-5.661-.089q-3.714-.179-5.75-2.214T.09 21.661Q.001 20.09.001 16t.089-5.661q.179-3.714 2.214-5.75t5.75-2.214q1.571-.089 5.661-.089t5.661.089q3.714.179 5.75 2.214t2.214 5.75q.089 1.571.089 5.661z"></path></symbol><symbol id="leave" viewbox="0 0 15 12"><title><?php  wp_title( '|', true, 'right' );  ?>
</title>
<path d="M8.98 7.324v3.632L15 5.379 8.98 0v3.222C1.666 3.222 0 11.334 0 11.334c2.07-3.659 5.01-4.01 8.98-4.01z" fill="#FFF" fill-rule="evenodd"></path></symbol><symbol id="linkedin" viewbox="0 0 27 32"><path d="M6.232 11.161v17.696H.339V11.161h5.893zm.375-5.465Q6.625 7 5.705 7.875t-2.42.875h-.036q-1.464 0-2.357-.875t-.893-2.179q0-1.321.92-2.188t2.402-.866 2.375.866.911 2.188zm20.822 13.018v10.143h-5.875v-9.464q0-1.875-.723-2.938t-2.259-1.063q-1.125 0-1.884.616t-1.134 1.527q-.196.536-.196 1.446v9.875H9.483q.036-7.125.036-11.554t-.018-5.286l-.018-.857h5.875v2.571h-.036q.357-.571.732-1t1.009-.929 1.554-.777 2.045-.277q3.054 0 4.911 2.027t1.857 5.938z"></path></symbol><symbol id="minus" viewbox="0 0 21 4"><title><?php  wp_title( '|', true, 'right' );  ?>
</title>
<path d="M19.42 0H1.06C.083 0 0 .79 0 1.765c0 .976.084 1.766 1.06 1.766h18.36c.976 0 1.06-.79 1.06-1.766C20.48.79 20.396 0 19.42 0z" fill="#FFF" fill-rule="evenodd"></path></symbol><symbol id="pinterest" viewbox="0 0 23 32"><path d="M0 10.661q0-1.929.67-3.634t1.848-2.973 2.714-2.196T8.536.465t3.607-.464q2.821 0 5.25 1.188t3.946 3.455 1.518 5.125q0 1.714-.339 3.357t-1.071 3.161-1.786 2.67-2.589 1.839-3.375.688q-1.214 0-2.411-.571t-1.714-1.571q-.179.696-.5 2.009t-.42 1.696-.366 1.268-.464 1.268-.571 1.116-.821 1.384-1.107 1.545l-.25.089-.161-.179q-.268-2.804-.268-3.357 0-1.643.384-3.688t1.188-5.134.929-3.625q-.571-1.161-.571-3.018 0-1.482.929-2.786T9.86 6.626q1.089 0 1.696.723t.607 1.83q0 1.179-.786 3.411t-.786 3.339q0 1.125.804 1.866t1.946.741q.982 0 1.821-.446t1.402-1.214 1-1.696.679-1.973.357-1.982.116-1.777q0-3.089-1.955-4.813t-5.098-1.723q-3.571 0-5.964 2.313t-2.393 5.866q0 .786.223 1.518t.482 1.161.482.813.223.545q0 .5-.268 1.304t-.661.804q-.036 0-.304-.054-.911-.268-1.616-1T.778 14.494t-.58-1.929-.196-1.902z"></path></symbol><symbol id="plane" viewbox="0 0 19 16"><title><?php  wp_title( '|', true, 'right' );  ?>
</title>
<path d="M18.38.808L.9 6.968c-.28.099-.343.342-.01.476L4.648 8.95l2.23.893 10.875-7.986c.146-.107.314.094.208.209l-7.793 8.429v.001l-.448.498.593.319 4.933 2.655a.505.505 0 0 0 .744-.332l2.877-12.4c.077-.341-.146-.548-.487-.428zM6.856 15.191c0 .245.137.312.328.14.248-.226 2.821-2.534 2.821-2.534l-3.148-1.629v4.023z" fill-rule="evenodd"></path></symbol><symbol id="play" viewbox="0 0 24 24"><path d="M12 20.016c4.406 0 8.016-3.609 8.016-8.016S16.407 3.984 12 3.984 3.984 7.593 3.984 12 7.593 20.016 12 20.016zm0-18c5.531 0 9.984 4.453 9.984 9.984S17.531 21.984 12 21.984 2.016 17.531 2.016 12 6.469 2.016 12 2.016zM9.984 16.5v-9l6 4.5z"></path></symbol><symbol id="plus" viewbox="0 0 21 21"><title><?php  wp_title( '|', true, 'right' );  ?>
</title>
<g fill="#FFF" fill-rule="evenodd"><path d="M19.42 9H1.06C.083 9 0 9.79 0 10.765c0 .976.084 1.766 1.06 1.766h18.36c.976 0 1.06-.79 1.06-1.766C20.48 9.79 20.396 9 19.42 9z"></path><path d="M12.005 19.946V1.585c0-.976-.79-1.06-1.765-1.06-.975 0-1.765.084-1.765 1.06v18.361c0 .976.79 1.06 1.765 1.06.975 0 1.765-.084 1.765-1.06z"></path></g></symbol><symbol id="search-dark-blue" viewbox="0 0 25 26"><title><?php  wp_title( '|', true, 'right' );  ?>
</title>
<path d="M24.445 21.837l-5.98-5.98a9.763 9.763 0 0 0 1.422-5.081C19.887 5.369 15.2.685 9.796.685c-5.405 0-9.79 4.383-9.79 9.79 0 5.407 4.687 10.09 10.09 10.09a9.754 9.754 0 0 0 4.929-1.332l6.012 6.012a1.507 1.507 0 0 0 2.13 0l1.493-1.49c.585-.59.373-1.33-.215-1.918zM3.016 10.473a6.777 6.777 0 0 1 6.776-6.777c3.745 0 7.08 3.335 7.08 7.08a6.776 6.776 0 0 1-6.777 6.776c-3.743 0-7.079-3.336-7.079-7.079z" fill="#14315E" fill-rule="evenodd"></path></symbol><symbol id="search" viewbox="0 0 25 26"><title><?php  wp_title( '|', true, 'right' );  ?>
</title>
<path d="M24.445 21.837l-5.98-5.98a9.763 9.763 0 0 0 1.422-5.081C19.887 5.369 15.2.685 9.796.685c-5.405 0-9.79 4.383-9.79 9.79 0 5.407 4.687 10.09 10.09 10.09a9.754 9.754 0 0 0 4.929-1.332l6.012 6.012a1.507 1.507 0 0 0 2.13 0l1.493-1.49c.585-.59.373-1.33-.215-1.918zM3.016 10.473a6.777 6.777 0 0 1 6.776-6.777c3.745 0 7.08 3.335 7.08 7.08a6.776 6.776 0 0 1-6.777 6.776c-3.743 0-7.079-3.336-7.079-7.079z" fill-rule="evenodd"></path></symbol><symbol id="times" viewbox="0 0 10 10"><title><?php  wp_title( '|', true, 'right' );  ?>
</title>
<path d="M9.482 7.771L7.771 9.482l-3.03-3.03-3.03 3.03L0 7.771l3.03-3.03L0 1.712 1.711 0l3.03 3.03L7.771.001l1.711 1.711-3.03 3.029z" fill-rule="evenodd"></path></symbol><symbol id="twitter" viewbox="0 0 30 32"><path d="M28.929 7.286q-1.196 1.75-2.893 2.982.018.25.018.75 0 2.321-.679 4.634t-2.063 4.437-3.295 3.759-4.607 2.607-5.768.973q-4.839 0-8.857-2.589.625.071 1.393.071 4.018 0 7.161-2.464-1.875-.036-3.357-1.152t-2.036-2.848q.589.089 1.089.089.768 0 1.518-.196-2-.411-3.313-1.991t-1.313-3.67v-.071q1.214.679 2.607.732-1.179-.786-1.875-2.054t-.696-2.75q0-1.571.786-2.911Q4.91 8.285 8.008 9.883t6.634 1.777q-.143-.679-.143-1.321 0-2.393 1.688-4.08t4.08-1.688q2.5 0 4.214 1.821 1.946-.375 3.661-1.393-.661 2.054-2.536 3.179 1.661-.179 3.321-.893z"></path></symbol><symbol id="undo" viewbox="0 0 32 32"><path d="M23.808 32c3.554-6.439 4.153-16.26-9.808-15.932V24L2 12 14 0v7.762C30.718 7.326 32.58 22.519 23.808 32z"></path></symbol><symbol id="user" viewbox="0 0 20 19"><title><?php  wp_title( '|', true, 'right' );  ?>
</title>
<path d="M15.33 13.66c-2.442-.89-3.223-1.64-3.223-3.247 0-.964.746-.649 1.073-2.416.136-.732.794-.012.92-1.685 0-.666-.359-.832-.359-.832s.183-.986.254-1.746c.09-.946-.546-3.39-3.934-3.39s-4.023 2.444-3.935 3.39c.072.76.254 1.746.254 1.746s-.359.166-.359.832c.126 1.673.784.952.92 1.685.328 1.767 1.072 1.452 1.072 2.416 0 1.606-.779 2.357-3.22 3.247-2.449.892-4.04 1.802-4.04 2.422v2.085H19.368v-2.085c0-.62-1.59-1.53-4.039-2.422z" fill-rule="evenodd"></path></symbol><symbol id="youtube" viewbox="0 0 20 20"><path d="M10 2.3C.172 2.3 0 3.174 0 10s.172 7.7 10 7.7 10-.874 10-7.7-.172-7.7-10-7.7zm3.205 8.034l-4.49 2.096c-.393.182-.715-.022-.715-.456V8.026c0-.433.322-.638.715-.456l4.49 2.096c.393.184.393.484 0 .668z"></path></symbol></svg>
    </div>
    <header class="site__header"><meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
      <nav class="nav nav-quick nav-quick--clone">
        <ul>
          <li><a href="<?php  bloginfo('template_url');  ?>//"> 
                <svg class="symbol symbol-barcode">
                  <use xlink:href="#barcode"></use>
                </svg><span>Barcode Generator</span></a></li>
          <li><a href="<?php  bloginfo('template_url');  ?>//"> 
                <svg class="symbol symbol-cart">
                  <use xlink:href="#cart"></use>
                </svg><span>Shop</span></a></li>
          <li><a href="<?php  bloginfo('template_url');  ?>//"> 
                <svg class="symbol symbol-plane">
                  <use xlink:href="#plane"></use>
                </svg><span>Contact</span></a></li>
          <li><a href="<?php  bloginfo('template_url');  ?>//"> 
                <svg class="symbol symbol-user">
                  <use xlink:href="#user"></use>
                </svg><span>Client Login</span></a></li>
        </ul>
      </nav>
      <div class="scarf clear">
<a href="" class="site__logo">Barcoding</a>
        <button aria-hidden="true" class="drawer__trigger">Menu</button>
        <div class="silk-nav drawer">
          <div class="site-search">
            <div class="site-search__trigger">
              <div class="vertically-center">
                  <svg class="symbol symbol-search">
                    <use xlink:href="#search"></use>
                  </svg>
              </div>
            </div>
            <div class="site-search__details">
              <label for="site-search__text" class="visible-for-screen-readers">Search this site for:</label>
              <input placeholder="Search by keyword…" type="text" id="site-search__text" name="site-search__text" class="site-search__text">
              <input type="submit" value="go" aria-label="Query search" class="site-search__submit">
            </div>
          </div>
          <div class="silk-nav__controls">
<a href="<?php  bloginfo('template_url');  ?>//" class="silk-nav__trigger silk-nav__trigger--home">
                <svg class="symbol symbol-home">
                  <use xlink:href="#home"></use>
                </svg><span>Home</span></a>
            <button class="silk-nav__trigger silk-nav__trigger--revert">
                <svg class="symbol symbol-undo">
                  <use xlink:href="#undo"></use>
                </svg><span>Main Menu</span>
            </button>
            <button class="silk-nav__trigger silk-nav__trigger--reverse">
                <svg class="symbol symbol-chevron-left">
                  <use xlink:href="#chevron-left"></use>
                </svg>
            </button>
          </div>
          <nav class="nav nav-main">
            <ul>
              <li>
<a href="<?php  html2wp_the_page_link( 'solutions.php' );  ?>">Solutions</a>
              </li>
              <li>
<a href="<?php  html2wp_the_page_link( 'business-areas.php' );  ?>">Business Areas</a>
              </li>
              <li>
<a href="<?php  bloginfo('template_url');  ?>//">Services</a>
                <ul>
                  <li><a href="<?php  bloginfo('template_url');  ?>//">GoLive Services</a></li>
                  <li><a href="<?php  bloginfo('template_url');  ?>//">StayLive Services</a></li>
                  <li><a href="<?php  bloginfo('template_url');  ?>//">GoLive Services</a></li>
                  <li><a href="<?php  bloginfo('template_url');  ?>//">StayLive Services</a></li>
                </ul>
              </li>
              <li>
<a href="<?php  bloginfo('template_url');  ?>//">Technology</a>
              </li>
              <li>
<a href="<?php  html2wp_the_page_link( 'resources.php' );  ?>">Resources</a>
              </li>
              <li>
<a href="<?php  html2wp_the_page_link( 'about.php' );  ?>">About Us</a>
              </li>
            </ul>
          </nav>
          <nav class="nav nav-quick">
            <ul>
              <li><a href="<?php  bloginfo('template_url');  ?>//"> 
                    <svg class="symbol symbol-barcode">
                      <use xlink:href="#barcode"></use>
                    </svg><span>Barcode Generator</span></a></li>
              <li><a href="<?php  bloginfo('template_url');  ?>//"> 
                    <svg class="symbol symbol-cart">
                      <use xlink:href="#cart"></use>
                    </svg><span>Shop</span></a></li>
              <li><a href="<?php  bloginfo('template_url');  ?>//"> 
                    <svg class="symbol symbol-plane">
                      <use xlink:href="#plane"></use>
                    </svg><span>Contact</span></a></li>
              <li><a href="<?php  bloginfo('template_url');  ?>//"> 
                    <svg class="symbol symbol-user">
                      <use xlink:href="#user"></use>
                    </svg><span>Client Login</span></a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    <main class="clear">
      <div class="video-bubble hero halfway-section">
        <div class="compartment">
          <div class="video__details">
            <h1 class="larger">Capture a Stronger Supply Chain.</h1>
            <p>From basic barcode labels to enterprise-wide solutions, our team takes the time to learn about your unique business needs. Then we develop, deploy and manage cost-effective solutions that let you sleep better at night and <strong>make your customers smile.</strong></p>
<a href="" class="button button--inverse full-width">Ask a Question</a><a href="" class="button button--inverse full-width">Request a Quote</a><a href="" class="button button--inverse full-width">Shop Now</a>
          </div>
        </div>
<img src="<?php  bloginfo('template_url');  ?>/./assets/images/hero.jpg" alt="undefined">
      </div>
      <ul class="swift-slide product-slide halfway-section">
        <li class="hero product">
          <div class="compartment">
            <div class="product__details">
              <h2 class="larger">Slide 1</h2>
              <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Maecenas faucibus mollis interdum. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo.</p>
<a href="" class="button">Read More</a>
            </div>
          </div>
<img src="<?php  bloginfo('template_url');  ?>/./assets/images/honeywell.jpg" alt="undefined">
        </li>
        <li class="hero product">
          <div class="compartment">
            <div class="product__details">
              <h2 class="larger">Slide 2</h2>
              <p>Maecenas faucibus mollis interdum. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
<a href="" class="button">Read More</a>
            </div>
          </div>
<img src="<?php  bloginfo('template_url');  ?>/./assets/images/honeywell.jpg" alt="undefined">
        </li>
        <li class="hero product">
          <div class="compartment">
            <div class="product__details">
              <h2 class="larger">Slide 3</h2>
              <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
<a href="" class="button">Read More</a>
            </div>
          </div>
<img src="<?php  bloginfo('template_url');  ?>/./assets/images/honeywell.jpg" alt="undefined">
        </li>
      </ul>
      <div class="halfway-section">
        <ul class="partners">
          <li class="partners__title">
            <h2 class="stay">Our Trusted Partners</h2>
          </li>
          <li class="partners__item"><a href=""><img src="<?php  bloginfo('template_url');  ?>/./assets/images/descartes.png" alt="undefined"></a></li>
          <li class="partners__item"><a href=""><img src="<?php  bloginfo('template_url');  ?>/./assets/images/honeywell.png" alt="undefined"></a></li>
          <li class="partners__item"><a href=""><img src="<?php  bloginfo('template_url');  ?>/./assets/images/nicelabel.png" alt="undefined"></a></li>
          <li class="partners__item"><a href=""><img src="<?php  bloginfo('template_url');  ?>/./assets/images/intellitrack.png" alt="undefined"></a></li>
          <li class="partners__item"><a href=""><img src="<?php  bloginfo('template_url');  ?>/./assets/images/zebra.png" alt="undefined"></a></li>
        </ul>
        <div class="bubble bubble--big bubble--white">
          <div class="compartment">
            <div class="blockquote-bubble clear">
                <figure class="shifted-asset shifted-asset--left"><img src="<?php  bloginfo('template_url');  ?>/./assets/images/big-circle.jpg" alt="">
                  <figcaption></figcaption>
                </figure>
              <div class="block-out">
                <blockquote>“Whether it’s modifying existing software or buying new hardware, the <strong>team at Barcoding, Inc. has my best interest at heart</strong>. They’ve learned my business and they’re willing to help me however they can.”
                  <cite>DONNA BECRAFT, CIO, Dunbar Armored</cite>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="grid halfway-section">
        <div class="col-aldnoah-6">
          <div class="callout callout--blue callout--larger hero">
<a href="" class="callout__details">
              <h3 class="mini">Blog</h3>
              <h2 class="larger">Walmart Using Drones in Quest to Outperform Amazon</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tincidunt urna vitae mauris rutrum interdum. Suspendisse eu lectus a leo tempor rhoncus. Cras lobortis vitae orci vitae finibus Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tincidunt urna vitae mauris rutrum interdum. Suspendisse eu lectus a leo tempor rhoncus. Cras lobortis vitae orci vitae finibus</p></a>
              <div class="callout__share">
                <h3 class="mini"><span>Share +</span></h3>
              </div>
<img src="<?php  bloginfo('template_url');  ?>/./assets/images/hero.jpg" alt="undefined">
          </div>
        </div>
        <div class="col-aldnoah-6">
          <div class="grid">
            <div class="col-medium-6">
              <div class="callout callout--orange">
<a href="" class="callout__details">
                  <h3 class="mini">Whitepapers</h3>
                  <h2 class="larger">Asset, Patient Tracking Technology Jockeys for Bottom-line Position.</h2></a>
                  <div class="callout__share">
                    <h3 class="mini"><span>Share +</span></h3>
                  </div>
              </div>
            </div>
            <div class="col-flush">
              <div class="callout callout--dark-blue callout--featured">
<a href="" class="callout__details">
                  <h3 class="mini">Featured Partner</h3>
                  <div class="callout__logo">
<img src="<?php  bloginfo('template_url');  ?>/./assets/images/honeywell-white.png" alt="undefined">
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tincidunt urna vitae mauris rutrum interdum. Suspendisse eu lectus a leo tempor rhoncus. Cras lobortis vitae orci vitae finibus</p></a>
                  <div class="callout__share">
                    <h3 class="mini"><span>Share +</span></h3>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="halfway-section">
        <div class="social-feeds">
          <div class="compartment">
            <ul>
              <li>
<a href="" target="_blank" class="social__bubble social__bubble--facebook">
                  <div class="social__icon">
                      <svg class="symbol symbol-facebook">
                        <use xlink:href="#facebook"></use>
                      </svg>
                  </div></a>
                <p>Could #‎hyperloop‬ systems replace trucks and rail for cargo <strong>‪#‎transportation‬</strong>?</p>
              </li>
              <li>
<a href="" target="_blank" class="social__bubble social__bubble--twitter">
                  <div class="social__icon">
                      <svg class="symbol symbol-twitter">
                        <use xlink:href="#twitter"></use>
                      </svg>
                  </div></a>
                <p>Proud sponsor of World Refugee Day in <strong>#Baltimore @RYPnews #CelebrateDiversity @ShaneBarcode</strong></p>
              </li>
              <li><a href="" target="_blank"><img src="<?php  bloginfo('template_url');  ?>/./assets/images/geeknetwork.png" class="full-width"></a></li>
            </ul>
          </div>
        </div>
        <div class="sign-up">
          <div class="compartment">
            <div class="sign-up__bubble">
              <h2>Sign up for our newsletter:</h2>
              <div class="sign-up__form">
                <input type="text" placeholder="Email Address">
                <input type="submit" value="Sign Up" class="button">
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer class="site__footer">
      <div class="lace clear">
<a href="" class="site__logo">Barcoding</a>
        <nav class="nav nav-social">
          <ul>
            <li><a href="" target="_blank"><span class="bottle">
                    <svg class="symbol symbol-pinterest">
                      <use xlink:href="#pinterest"></use>
                    </svg></span><span class="visible-for-screen-readers">Pinterest</span></a></li>
            <li><a href="" target="_blank"><span class="bottle">
                    <svg class="symbol symbol-google">
                      <use xlink:href="#google"></use>
                    </svg></span><span class="visible-for-screen-readers">Google+</span></a></li>
            <li><a href="" target="_blank"><span class="bottle">
                    <svg class="symbol symbol-linkedin">
                      <use xlink:href="#linkedin"></use>
                    </svg></span><span class="visible-for-screen-readers">linkedin</span></a></li>
            <li><a href="" target="_blank"> <span class="bottle">
                    <svg class="symbol symbol-twitter">
                      <use xlink:href="#twitter"></use>
                    </svg></span><span class="visible-for-screen-readers">Twitter   </span></a></li>
            <li><a href="" target="_blank"><span class="bottle">
                    <svg class="symbol symbol-facebook">
                      <use xlink:href="#facebook"></use>
                    </svg></span><span class="visible-for-screen-readers">Facebook</span></a></li>
          </ul>
        </nav>
      </div>
      <div class="sole clear">
        <div class="tread">
          <nav class="nav nav-secondary-main">
            <ul>
              <li>
<a href="<?php  html2wp_the_page_link( 'solutions.php' );  ?>">Solutions</a>
              </li>
              <li>
<a href="<?php  html2wp_the_page_link( 'business-areas.php' );  ?>">Business Areas</a>
              </li>
              <li>
<a href="<?php  bloginfo('template_url');  ?>//">Services</a>
              </li>
              <li>
<a href="<?php  bloginfo('template_url');  ?>//">Technology</a>

              </li>
              <li>
<a href="<?php  html2wp_the_page_link( 'resources.php' );  ?>">Resources</a>
              </li>
              <li>
<a href="<?php  html2wp_the_page_link( 'about.php' );  ?>">About Us</a>
              </li>
            </ul>
          </nav>
        </div>
        <div class="tread">
          <nav class="nav nav-bulleted nav-action">
            <ul>
              <li><a href="<?php  bloginfo('template_url');  ?>//">Contact</a></li>
              <li><a href="<?php  bloginfo('template_url');  ?>//">Employee Login</a></li>
              <li><a href="<?php  bloginfo('template_url');  ?>//">Employment</a></li>
              <li><a href="<?php  bloginfo('template_url');  ?>//">Store</a></li>
            </ul>
          </nav>
          <nav class="nav nav-bulleted nav-legal">
            <ul>
              <li><a href="<?php  bloginfo('template_url');  ?>//">@ 2017 Barcoding</a></li>
              <li><a href="<?php  bloginfo('template_url');  ?>//">Privacy Policy</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php  bloginfo('template_url');  ?>/assets/js/build/main.js"></script>
    <script src="<?php  bloginfo('template_url');  ?>/assets/js/build/site.js"></script>
  <?php  wp_footer();  ?>
</body>
</html>
