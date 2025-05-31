// Fungsi text mengetik
$(document).ready(function() {
    const textElement = $('.header-right h2');
    const text = "Data Enthusiast";
    const speed = 155;
    textAnimation(textElement, text, speed);
    
    function textAnimation(textElement, text, speed) {
        let i = 0;
        let isDeleting = false;
    
        function type() {
            if (i < text.length && !isDeleting) {
                textElement.text(textElement.text() + text.charAt(i));
                i++;
                setTimeout(type, speed);
            } else if (i > 0 && isDeleting) {
                textElement.text(text.substring(0, i - 1));
                i--;
                setTimeout(type, speed / 2);
            } else {
                isDeleting = !isDeleting;
                setTimeout(type, speed);
            }
        }
    
        type();
    }
});

$(document).ready(function() {
    const headerImage = $('.header-left img');
    let position = 0, direction = 1;
    
    function moveImage() {
         if (position >= 13 || position <= -13) direction *= -1;
        position += direction;
        headerImage.css('transform', `translateY(${position}px)`);
        setTimeout(moveImage, 50);
    }
    
     moveImage();
});

$(document).ready(function() {
    // Mengatur event click pada tombol untuk mengatur fungsi hide dan show
    $('.toggle-table').click(function() {
        // Mengambil elemen tabel terkait
        const table = $(this).closest('.resume-box').find('table');
        // Menggunakan fungsi toggle() untuk menyembunyikan/menampilkan tabel
        table.toggle();
    });
});
