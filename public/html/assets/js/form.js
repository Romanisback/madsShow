document.addEventListener(
    'DOMContentLoaded',
    () => {
        // Code here
        const slider = document.getElementById("range");
        const output = document.getElementById("value");
        const views = document.getElementById("view");
        const click = document.getElementById("click");
        

        // Проверяем есть ли элементы на активной странице, чтобы убрать ошибки 
        if (slider !== null & output !== null & views !== null & click !== null){
            let S1 = slider.value.toString();
            output.value = S1.replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ');
            let viewssum = slider.value * 10;
            let S2 = viewssum.toString();
            views.value = S2.replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ');
            let clicksum = slider.value / 5;
            let S3 = clicksum.toString();
            click.value = S3.replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ');
    
    
            // output.value !== slider.value ? output.value = slider.value : '';
    
            // views.value !== slider.value ? views.value = slider.value * 10 : '';
            // click.value !== slider.value ? click.value = slider.value / 5 : '';
    
            // Slider Config
            const sliderHandler = ({ target: { value, min = 30000, max } }) => {
    
    
    
                output.value = value.replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ');
                let F1 = value * 10;
                let ff = F1.toString();
                views.value = ff.replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ');
                let F2 = value / 5;
                let cc = F2.toString();
                click.value = cc.replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ');
    
                const gradientValue = (value - min) / (max - min) * 100;
                slider.style.background = [ //linear-gradient(30deg, rgb(252,62, 58) 5%, rgb(255,240,82) 0%)
                    '-webkit-linear-gradient(',
                    '0deg, rgb(255,240,82) 0%, rgb(252,62, 58) ' + Math.floor(gradientValue),
                    '%, rgb(208,208,207) 0%',
                    ')'
                ].join('')
            };
    
    
            slider.oninput = sliderHandler;
    
            output.oninput = function () {
                slider.value = this.value;
            }
            views.oninput = function () {
                slider.value = this.value;
            }
            click.oninput = function () {
                slider.value = this.value;
            }
        }
       
    }
)


