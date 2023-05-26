$(document).ready(() => {
    const $form = $("#form");
    $('#stop').bind('click', () => $form.attr('action', '../pages/uploaderdelete.php'));
    $('#send').bind('click', () => $form.attr('action', '../pages/uploader.php'));
    $('#skip').bind('click', () => $form.attr('action', '../pages/compliment.html'));
    $("button.doorgaan").bind('click', ()=>window.location.href="../pages/infopage.php");
    if ($('.animation-overlay')){
      setTimeout(() => {
        $('.animation-overlay').css("display", "none");
      }, 4000);
    }
    const $imageInput = $("#photo");
    let $uploadedImage = "";
    $imageInput.bind("change", () => {
      const reader = new FileReader();
      reader.addEventListener('load', () => {
        console.log("loaded");
        $uploadedImage = reader.result;
          let element = document.querySelector('#image-container');
          element.innerHTML = '';
          element.setAttribute('style', `background-image: url(${$uploadedImage})`);
      });
      reader.readAsDataURL($imageInput[0].files[0]);
    });
  });