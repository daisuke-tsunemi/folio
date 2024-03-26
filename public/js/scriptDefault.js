// GitHub Repo : https://github.com/aryan-tayal/Mountains-Parallax
// Live Site : https://aryan-tayal.github.io/Mountains-Parallax/

const mountainLeft = document.querySelector('#mountain_left');
const mountainRight = document.querySelector('#mountain_right');
const cloud1 = document.querySelector('#clouds_1');
const cloud2 = document.querySelector('#clouds_2');
const text = document.querySelector('#text');
const man = document.querySelector('#man');

window.addEventListener('scroll',()=>{
    let value = scrollY;
    mountainLeft.style.left = `-${value/0.7}px`
    cloud2.style.left = `-${value*2}px`
    mountainRight.style.left = `${value/0.7}px`
    cloud1.style.left = `${value*2}px`
    text.style.bottom = `-${value}px`;
    man.style.height = `${window.innerHeight - value}px`
})
// Lenis 慣性スクロール
const lenis = new Lenis({
    smoothTouch: true, 
});
function raf(time) {
  lenis.raf(time);
  requestAnimationFrame(raf);
}
requestAnimationFrame(raf);

// マウスストーカー
const stalker = document.getElementById('stalker');
//aタグにホバー中かどうかの判別フラグ
let hovFlag = false;
document.addEventListener('mousemove', function (e) {
    if (!hovFlag) {
    stalker.style.transform = 'translate(' + e.clientX + 'px, ' + e.clientY + 'px)';
    }
});
const linkElem = document.querySelectorAll('a:not(.no_stick_)');
for (let i = 0; i < linkElem.length; i++) {
    linkElem[i].addEventListener('mouseover', function (e) {
        hovFlag = true;
        stalker.classList.add('is-hov');
        let rect = e.target.getBoundingClientRect();
        let posX = rect.left + (rect.width / 2);
        let posY = rect.top + (rect.height / 2);
        stalker.style.transform = 'translate(' + posX + 'px, ' + posY + 'px)';
    });
    linkElem[i].addEventListener('mouseout', function (e) {
        hovFlag = false;
        stalker.classList.remove('is-hov');
    });
}

// ヨコスクロールエリア
  const stickySections = [...document.querySelectorAll('.p-works__sticky')]
  window.addEventListener('scroll', (e) => {
      for(let i = 0; i < stickySections.length; i++){
          transform(stickySections[i])
      }
  })
  function transform(section) {
      const offsetTop = section.parentElement.offsetTop;
      const scrollSection = section.querySelector('.p-works__scroll')
      let percentage = ((window.scrollY - offsetTop) / window.innerHeight) * 100;
      percentage = percentage < 0 ? 0 : percentage > 300 ? 300 : percentage;
      scrollSection.style.transform = `translate3d(${-(percentage)}vw, 0, 0)`
  }