var REV_1 = {
    preload: function() {
        var parent = $('.slider-zone[slider="1"]');
            origin = $('[slider="1"] .slider-box');
        this.parent = parent;

        origin
            .clone()
            .prependTo(this.parent)
            .clone()
            .appendTo(this.parent);

        origin
            .eq(0)
            .addClass('back left')
            .prevAll('.slider-box')
            .addClass('hide left');
        origin
            .eq(1)
            .addClass('front');
        origin
            .eq(2)
            .addClass('back right')
            .nextAll('.slider-box')
            .addClass('hide right');
    }
    ,parent: {} // JQ родительский элемент
    ,previous: function() {
        var parent = this.parent,
            left = parent.find('.back.left'),
            front = parent.find('.front'),
            right = parent.find('.back.right'),
            last = parent.find('.slider-box:last');
        left
            .removeClass('left back')
            .addClass('front')
            .prev()
            .removeClass('hide')
            .addClass('back');
        front
            .removeClass('front')
            .addClass('back right');
        right
            .removeClass('back')
            .addClass('hide');
        last
            .removeClass('right')
            .addClass('left')
            .prependTo(parent);
    }
    ,next: function() {
        var parent = this.parent,
            left = parent.find('.back.left'),
            front = parent.find('.front'),
            right = parent.find('.back.right'),
            first = parent.find('.slider-box:first');
        right
            .removeClass('back right')
            .addClass('front')
            .next()
            .removeClass('hide')
            .addClass('back');
        front
            .removeClass('front')
            .addClass('back left');
        left
            .removeClass('back')
            .addClass('hide');
        first
            .removeClass('left')
            .addClass('right')
            .appendTo(parent);
    }
}

var REV_2 = {
    preload: function() {
        var parent = $('.slider-zone[slider="2"]');
            origin = $('[slider="2"] .slider-box');
        this.parent = parent;

        origin
            .clone()
            .prependTo(this.parent)
            .clone()
            .appendTo(this.parent);

        origin
            .eq(0)
            .addClass('back left')
            .prevAll('.slider-box')
            .addClass('hide left');
        origin
            .eq(1)
            .addClass('front');
        origin
            .eq(2)
            .addClass('back right')
            .nextAll('.slider-box')
            .addClass('hide right');
    }
    ,parent: {} // JQ родительский элемент
    ,previous: function() {
        var parent = this.parent,
            left = parent.find('.back.left'),
            front = parent.find('.front'),
            right = parent.find('.back.right'),
            last = parent.find('.slider-box:last');
        left
            .removeClass('left back')
            .addClass('front')
            .prev()
            .removeClass('hide')
            .addClass('back');
        front
            .removeClass('front')
            .addClass('back right');
        right
            .removeClass('back')
            .addClass('hide');
        last
            .removeClass('right')
            .addClass('left')
            .prependTo(parent);
    }
    ,next: function() {
        var parent = this.parent,
            left = parent.find('.back.left'),
            front = parent.find('.front'),
            right = parent.find('.back.right'),
            first = parent.find('.slider-box:first');
        right
            .removeClass('back right')
            .addClass('front')
            .next()
            .removeClass('hide')
            .addClass('back');
        front
            .removeClass('front')
            .addClass('back left');
        left
            .removeClass('back')
            .addClass('hide');
        first
            .removeClass('left')
            .addClass('right')
            .appendTo(parent);
    }
}

var REV_3 = {
    preload: function() {
        var parent = $('.slider-zone[slider="3"]');
            origin = $('[slider="3"] .slider-box');
        this.parent = parent;

        origin
            .clone()
            .prependTo(this.parent)
            .clone()
            .appendTo(this.parent);

        origin
            .eq(0)
            .addClass('back left')
            .prevAll('.slider-box')
            .addClass('hide left');
        origin
            .eq(1)
            .addClass('front');
        origin
            .eq(2)
            .addClass('back right')
            .nextAll('.slider-box')
            .addClass('hide right');
    }
    ,parent: {} // JQ родительский элемент
    ,previous: function() {
        var parent = this.parent,
            left = parent.find('.back.left'),
            front = parent.find('.front'),
            right = parent.find('.back.right'),
            last = parent.find('.slider-box:last');
        left
            .removeClass('left back')
            .addClass('front')
            .prev()
            .removeClass('hide')
            .addClass('back');
        front
            .removeClass('front')
            .addClass('back right');
        right
            .removeClass('back')
            .addClass('hide');
        last
            .removeClass('right')
            .addClass('left')
            .prependTo(parent);
    }
    ,next: function() {
        var parent = this.parent,
            left = parent.find('.back.left'),
            front = parent.find('.front'),
            right = parent.find('.back.right'),
            first = parent.find('.slider-box:first');
        right
            .removeClass('back right')
            .addClass('front')
            .next()
            .removeClass('hide')
            .addClass('back');
        front
            .removeClass('front')
            .addClass('back left');
        left
            .removeClass('back')
            .addClass('hide');
        first
            .removeClass('left')
            .addClass('right')
            .appendTo(parent);
    }
}

// var REV_4 = {
//     preload: function() {
//         var parent = $('.slider-zone[slider="4"]');
//             origin = $('[slider="4"] .slider-box');
//         this.parent = parent;
//
//         origin
//             .clone()
//             .prependTo(this.parent)
//             .clone()
//             .appendTo(this.parent);
//
//         origin
//             .eq(0)
//             .addClass('back left')
//             .prevAll('.slider-box')
//             .addClass('hide left');
//         origin
//             .eq(1)
//             .addClass('front');
//         origin
//             .eq(2)
//             .addClass('back right')
//             .nextAll('.slider-box')
//             .addClass('hide right');
//     }
//     ,parent: {} // JQ родительский элемент
//     ,previous: function() {
//         var parent = this.parent,
//             left = parent.find('.back.left'),
//             front = parent.find('.front'),
//             right = parent.find('.back.right'),
//             last = parent.find('.slider-box:last');
//         left
//             .removeClass('left back')
//             .addClass('front')
//             .prev()
//             .removeClass('hide')
//             .addClass('back');
//         front
//             .removeClass('front')
//             .addClass('back right');
//         right
//             .removeClass('back')
//             .addClass('hide');
//         last
//             .removeClass('right')
//             .addClass('left')
//             .prependTo(parent);
//     }
//     ,next: function() {
//         var parent = this.parent,
//             left = parent.find('.back.left'),
//             front = parent.find('.front'),
//             right = parent.find('.back.right'),
//             first = parent.find('.slider-box:first');
//         right
//             .removeClass('back right')
//             .addClass('front')
//             .next()
//             .removeClass('hide')
//             .addClass('back');
//         front
//             .removeClass('front')
//             .addClass('back left');
//         left
//             .removeClass('back')
//             .addClass('hide');
//         first
//             .removeClass('left')
//             .addClass('right')
//             .appendTo(parent);
//     }
// }

REV_1.preload();
REV_2.preload();
REV_3.preload();
// REV_4.preload();




var catalog_items = Array.from(document.querySelectorAll('.catalog-item'));

catalog_items.forEach(function(item){

    item.addEventListener('click', function(e){

        // console.log('test');
        // console.log(e.target.closest('.catalog-item').querySelector('[slider-counter="counter"]').innerHTML);

        if(e.target.closest('.catalog-item')){

            var current_count = e.target.closest('.catalog-item').querySelector('.front').getAttribute('slider-order');

            e.target.closest('.catalog-item').querySelector('[slider-counter]').innerHTML = current_count;

        }
    });
});
