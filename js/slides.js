var slides = document.querySelector('.slides'),
    slide = document.querySelectorAll('.swiper'),
    currentIdx = 0,
    slideCount = slide.length,
    slideWidth = 197,
    slideMargin = 0,
    prevBtn = document.querySelector('.prev'),
    nextBtn = document.querySelector('.next');

    makeClone();
    // 클론을 만들어주는 함수
    function makeClone(){
        for(var i = 0; i < slideCount; i++){
            var cloneSlide = slide[i].cloneNode(true);
            cloneSlide.classList.add('clone');
            slides.appendChild(cloneSlide);
        }
        for(var i = slideCount - 1; i>=0; i--){
            var cloneSlide = slide[i].cloneNode(true);
            cloneSlide.classList.add('clone');
            slides.prepend(cloneSlide);
        }
        updateWidth();
        setInitialPos();
        
        // 이미지 이동시 애니메이션 효과
        setTimeout(function(){
            slides.classList.add('animated');
        }, 100);
    }
    
    // 새로운 가로값으로 이미지가 양옆으로 보이지는 않지만 길게 뻗어있는 형태
    function updateWidth(){
        var currentSlides = document.querySelectorAll('.swiper');
        var newSlideCount = currentSlides.length;

        var newWidth = (slideWidth + slideMargin) * newSlideCount - slideMargin + 'px';
        slides.style.width = newWidth;
    }

    // 이동할때마다 변화되는값
    function setInitialPos(){
        var initialTranslateValue = -(slideWidth + slideMargin) * slideCount;
        slides.style.transform = 'translateX(' + initialTranslateValue + 'px)';
    }

    // 좌, 우 버튼 클릭시 카운터 함수
    nextBtn.addEventListener('click',function(){
        moveSlide(currentIdx + 1);
    });
    prevBtn.addEventListener('click',function(){
        moveSlide(currentIdx - 1);
    });

    //무한으로 슬라이더가 돌 수 있게 만드는 함수
    function moveSlide(num){
        slides.style.left = -num * (slideWidth +  slideMargin) + 'px';
        currentIdx = num;
        console.log(currentIdx,slideCount);

        if(currentIdx == slideCount || currentIdx == -slideCount){
            
            setTimeout(function(){
                slides.classList.remove('animated');
                slides.style.left = '0px';
                currentIdx = 0;
            }, 500);
            setTimeout(function(){
                slides.classList.add('animated');
            }, 600);
        }
    }