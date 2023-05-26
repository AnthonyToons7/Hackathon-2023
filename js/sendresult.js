const blurry = [
    "pexels-ali-pazani-2787341",
    "pexels-anna-shvets-4971517",
    "pexels-chloe-1043474",
    "pexels-cliff-booth-4058316",
    "pexels-cottonbro-studio-9376110",
    "pexels-dalila-dalprat-1970261",
    "pexels-elina-fairytale-3865718",
    "pexels-engin-akyurt-1493294",
    "pexels-engin-akyurt-1642228",
    "pexels-gabriela-pereira-1844138",
    "pexels-ivan-oboleninov-2868534",
    "pexels-john-ray-ebora-3969780",
    "pexels-ketut-subiyanto-4669947",
    "pexels-nichole-sebastian-3279545",
    "pexels-nick-3567041",
    "pexels-polina-tankilevitch-4519122"
];
$(document).ready(() => {
    $("button.doorgaan").bind('click', ()=>window.location.href="../pages/infopage.php");
    const imagesArray = $(".carousel");
    blurry.forEach(img => {
        let placeHolder = document.createElement("img");
        placeHolder.classList.add("carousel-item");
        placeHolder.src = `../img/vervagen/${img}.jpg`;
        imagesArray.append(placeHolder);
    });
    setInterval(()=>{
        let image = $(".carousel > img:first-child");
        imagesArray.remove(image);
        imagesArray.append(image);
    }, 2000);
    setTimeout(() => {
        $('.envelope-container').css("display", 'none');
        $('.animation-overlay').css("display", 'none');
    }, 12000);
});
