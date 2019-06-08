$(document).ready(function() {
  $('.skip-links a').on('focus', function() {
    $('.skip-links').removeClass('sr-only');
  });

  $('.skip-links a').on('blur', function() {
    $('.skip-links').addClass('sr-only');
  });

  let myA = $('.fleches a');

  myA.click(function(e) {
    e.preventDefault();
    let myAId = $(this).attr('href');
    let posElem = $(myAId).offset().top;

    $('html,body')
      .stop()
      .animate(
        {
          scrollTop: posElem - 100
        },
        1000
      );
  });

  $('#menu_burger').click(function() {
    if ($('#nav_mobile #menu_mobile ul').is(':hidden')) {
      $('#nav_mobile ul').slideDown();
      $('#fermer_menu').toggle();
      $(this).addClass('is-active');
      $('.entete').css('filter', 'blur(.2rem)');
      $('.exclu').css('filter', 'blur(.2rem)');
      $('main').css('filter', 'blur(.2rem)');
      $('footer').css('filter', 'blur(.2rem)');
      $('html').addClass('hidden');
    } else {
      $('#nav_mobile ul').slideUp();
      $('#fermer_menu').toggle();
      $(this).removeClass('is-active');
      $('.entete').css('filter', 'none');
      $('.exclu').css('filter', 'none');
      $('main').css('filter', 'none');
      $('footer').css('filter', 'none');
      $('html').removeClass('hidden');
    }
  });

  $('#fermer_menu').click(function() {
    $('#nav_mobile ul').slideUp();
    $('#fermer_menu').toggle();
    $('#menu_burger').removeClass('is-active');
    $('.entete').css('filter', 'none');
    $('.exclu').css('filter', 'none');
    $('main').css('filter', 'none');
    $('footer').css('filter', 'none');
    $('html').removeClass('hidden');
  });

  if ($(window).width() >= 1095) {
    $('#search').addClass('open');
  }

  $('#search').click(function() {
    $(this).addClass('open');
    $('#search input').focus();
  });

  if ($(window).width() < 1095) {
    $('#search input').focusout(function() {
      $('#search').removeClass('open');
    });
  }

  $(window).scroll(function(e) {
    e.preventDefault();
    let nav = $('header');
    let position = $(window).scrollTop();
    if (position >= '100') {
      nav.addClass('scrollTo');
      if ($(window).width() <= 550) {
        $('.aside.legumes #buttonForm').addClass('scrollTo');
      } else {
        $('.aside.legumes #buttonForm').removeClass('scrollTo');
      }
    } else {
      nav.removeClass('scrollTo');
      $('.aside.legumes #buttonForm').removeClass('scrollTo');
    }
  });

  /* form légumes */

  $('#form_legumes_commander').click(function() {
    $('.aside.legumes.mobile .form_legumes').css('display', 'none');
    if ($('.aside.legumes').hasClass('mobile')) {
      $('.aside.legumes').toggleClass('mobile');
      $('.aside.legumes').toggleClass('wrapper');
      $('.popUpBg').toggle();
      $('html').removeClass('hidden');
    }
    $('html, body').animate(
      { scrollTop: $('#form_contact_legumes').offset().top - 150 },
      1500
    );
  });

  /* Bouton et panier mobile */

  if ($(window).width() <= 1300) {
    $('#buttonForm').addClass('clickable');
  }

  $(window).resize(function() {
    if ($(window).width() <= 1300) {
      $('#buttonForm').addClass('clickable');
      $('#search').addClass('open');
    } else {
      $('#buttonForm').removeClass('clickable');
      $('.aside.legumes').removeClass('mobile');
      $('#search').removeClass('open');
    }
  });

  $('#buttonForm.clickable').click(function() {
    $('.popUpBg').toggle();
    $('.form_legumes').toggle();
    $('.aside.legumes').toggleClass('mobile');
    $('.aside.legumes').toggleClass('wrapper');
    $('html').toggleClass('hidden');
    $(this).blur();
  });

  $('.popUpBg').click(function() {
    $(this).toggle();
    $('.form_legumes').toggle();
    $('.aside.legumes').toggleClass('mobile');
    $('.aside.legumes').toggleClass('wrapper');
    $('html').removeClass('hidden');
  });

  $('.banner #banner1').parallax({ imageSrc: '../img/Potager_brocoli.jpg' });

  $('.banner #banner2').parallax({ imageSrc: '../img/Moutarde.jpg' });

  $('main .sections.galleries .content .textes .gallery .images').each(
    function() {
      let width = $(this).width();
      $(this).css('height', width + 'px');
    }
  );

  $(window).resize(function() {
    $('main .sections.galleries .content .textes .gallery .images').each(
      function() {
        let width = $(this).width();
        $(this).css('height', width + 'px');
      }
    );
  });

  if ($('#divPartenaire').length) {
    $('#divPartenaire').css('top', $('#divPartenaire').offset().top);
  }

  $('.error').click(function() {
    $(this).slideUp();
  });

  $('.success').click(function() {
    $(this).slideUp();
  });

  // init Masonry
  // let $grid = $('#gallery_legumes').masonry({
  //     // options
  //     itemSelector: '.items',
  //     columnWidth: 100,
  //     percentPosition: true,
  //     isAnimated:true
  // });
  // // layout Masonry after each image loads
  // $grid.imagesLoaded().progress( function() {
  //     $grid.masonry('layout');
  // });

  // $("#research").on('input', function(){
  //     $grid.masonry('remove','.items');
  //     $grid.masonry('reloadItems');
  //     $grid.masonry('layout');
  // });
});

const query = document.querySelectorAll.bind(document);
const queryOnly = document.querySelector.bind(document);

Array.from(query('.myInputs input')).map(item =>
  item.addEventListener('input', function() {
    if (
      item.value == '' ||
      item.value == null ||
      item.value == undefined ||
      item.value == ' '
    ) {
      item.classList.remove('writed');
    } else {
      item.classList.add('writed');
    }
  })
);

function partenaireHover(e) {
  let imgLink = e.src.split('img/partenaires/')[1];
  let imgName = imgLink.split('.');
  let imgNewSrc = 'img/partenaires/' + imgName[0] + '_color.' + imgName[1];
  e.style.opacity = 1;
  return (e.src = imgNewSrc);
}

function partenaireOut(e) {
  let imgLink = e.src.split('img/partenaires/')[1];
  let imgName = imgLink.split('_color');
  let imgNewSrc = 'img/partenaires/' + imgName[0] + imgName[1];
  e.style.opacity = 0.7;
  return (e.src = imgNewSrc);
}

function relief() {
  let pageurl = location.href;
  let dnl = query('li .anav');
  for (let i = 0; i < dnl.length; i++) {
    let x = dnl.item(i);
    if (x.href == pageurl) {
      x.nextSibling.nextSibling.style.left = '0';
    }
    let local = pageurl.split('melegumes.jasoncaussin.be/');
    /*console.table(local);*/
    let is_safari = /^((?!chrome|android).)*safari/i.test(navigator.userAgent);
    if (is_safari && local[1] == 'index') {
      queryOnly('html').classList.add('hidden');
      queryOnly('body').classList.add('hidden');
    }
  }
}

window.onload = relief;
