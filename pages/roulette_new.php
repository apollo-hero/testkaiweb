<div id="imgkolo" class="wheel">
    <img class="wheel-field jackpot" src="../assets/img/games/none.png" style="transform:rotate(0deg)">
    <img class="wheel-field jackpot" src="../assets/img/games/none.png" style="display:none; transform:rotate(180deg)">
    <img class="wheel-field drawn" src="../assets/img/games/none.png" style="opacity: 1; transform: rotate(0deg);">


    <div class="wheel-rewards-slot jackpot opacity1" style="top:25px; left:181px;">
        <div class="wheel-rewards-group">
            <div class="nt-item-small"><img src="/images/icons/4508.png"></div>
        </div>
    </div>
    <div class="wheel-rewards-slot other opacity1" style="top:40px; left:238px;">
        <div class="wheel-rewards-group">
            <div class="nt-item-small"><img src="/images/icons/2809.png"></div>
        </div>
    </div>
    <div class="wheel-rewards-slot other opacity1" style="top:73px; left:292px;">
        <div class="wheel-rewards-group">
            <div class="nt-item-small"><img src="/images/icons/1744.png"></div>
        </div>
    </div>
    <div class="wheel-rewards-slot other opacity1" style="top:123px; left:328px;">
        <div class="wheel-rewards-group">
            <div class="nt-item-small"><img src="/images/icons/2998.png"></div>
        </div>
    </div>
    <div class="wheel-rewards-slot other opacity1" style="top:181px; left:340px;">
        <div class="wheel-rewards-group">
            <div class="nt-item-small"><img src="/images/icons/4010.png"></div>
            <div class="nt-item-small"><img src="/images/icons/4011.png"></div>
        </div>
    </div>
    <div class="wheel-rewards-slot other opacity1" style="top:243px; left:328px;">
        <div class="wheel-rewards-group">
            <div class="nt-item-small"><img src="/images/icons/4058.png"></div>
        </div>
    </div>
    <div class="wheel-rewards-slot other opacity1" style="top:295px; left:295px;">
        <div class="wheel-rewards-group">
            <div class="nt-item-small"><img src="/images/icons/2953.png"></div>
        </div>
    </div>
    <div class="wheel-rewards-slot other opacity1" style="top:330px; left:240px;">
        <div class="wheel-rewards-group">
            <div class="nt-item-small"><img src="/images/icons/2810.png"></div>
        </div>
    </div>
    <div class="wheel-rewards-slot other opacity1" style="top:340px; left:180px;">
        <div class="wheel-rewards-group">
            <div class="nt-item-small"><img src="/images/icons/4295.png"></div>
        </div>
    </div>
    <div class="wheel-rewards-slot other opacity1" style="top:330px; left:120px;">
        <div class="wheel-rewards-group">
            <div class="nt-item-small"><img src="/images/icons/4078.png"></div>
        </div>
    </div>
    <div class="wheel-rewards-slot other opacity1" style="top:295px; left:70px;">
        <div class="wheel-rewards-group">
            <div class="nt-item-small"><img src="/images/icons/2915.png"></div>
        </div>
    </div>
    <div class="wheel-rewards-slot other opacity1" style="top:243px; left:38px;">
        <div class="wheel-rewards-group">
            <div class="nt-item-small"><img src="/images/icons/2789.png"></div>
        </div>
    </div>
    <div class="wheel-rewards-slot other opacity1" style="top:181px; left:22px;">
        <div class="wheel-rewards-group">
            <div class="nt-item-small"><img src="/images/icons/1841.png"></div>
        </div>
    </div>
    <div class="wheel-rewards-slot other opacity1" style="top:123px; left:38px;">
        <div class="wheel-rewards-group">
            <div class="nt-item-small"><img src="/images/icons/4078.png"></div>
        </div>
    </div>
    <div class="wheel-rewards-slot other opacity1" style="top:73px; left:73px;">
        <div class="wheel-rewards-group">
            <div class="nt-item-small"><img src="/images/icons/4010.png" style="width: 31.5333px; height: 31.5333px; max-width: 114.134px; max-height: 114.134px;"></div>
            <div class="nt-item-small"><img src="/images/icons/4011.png" style="width: 31.5333px; height: 31.5333px; max-width: 114.134px; max-height: 114.134px;"></div>
        </div>
    </div>
    <div class="wheel-rewards-slot other opacity1" style="top:40px; left:122px;">
        <div class="wheel-rewards-group">
            <div class="nt-item-small"><img src="/images/icons/2326.png"></div>
        </div>
    </div>

    <div class="wheel-button-play" data-status="0">
        <p>Spin <br>150 Coins</p>
    </div>
</div>

<script>

var postions = [
        {"top": '25', "left" : '181'},
        {"top" : '40', "left" : '238'},
        {"top" : '73', "left" : '292'},
        {"top" : '123', "left" : '328'},
        {"top" : '181', "left" : '340'},
        {"top" : '243', "left" : '328'},
        {"top" : '295', "left" : '295'},
        {"top" : '330', "left" : '240'},
        {"top" : '340', "left" : '180'},
        {"top" : '330', "left" : '120'},
        {"top" : '295', "left" : '70'},
        {"top" : '243', "left" : '38'},
        {"top" : '181', "left" : '22'},
        {"top" : '123', "left" : '38'},
        {"top" : '73', "left" : '73'},
        {"top" : '40', "left" : '122'},
    ];
    
$(document).ready(function(){
    $(document).on('click', '.delete-all-rewards:not(.disabled)', function() {
        if (confirm("Are you sure, you want to delete all items?")){
             
                $('#all_drawn_rewards').html('');
                $('.delete-all-rewards').addClass('disabled');
                familyshout(data.message);
                    } 
    });

    $(document).on('click', '.rewards-show', function() {
        $(this).hide();
        $('.rewards-show-box').show();
    });


    $(document).on('click', '.span-double-jackpot:not(.disabled)', function() {
        if (!$(this).hasClass('checked')){
            var slot = $('.wheel-rewards-slot.other:eq(7)');
            slot.removeClass('other');
            slot.addClass('jackpot');
            $('.wheel-field.jackpot:eq(1)').show();
        } else {
            var slot = $('.wheel-rewards-slot.jackpot:eq(1)');
            slot.removeClass('jackpot');
            slot.addClass('other');
            $('.wheel-field.jackpot:eq(1)').hide();
        }
    });

    $(document).on('click', '.wheel-button-play', function() {
        // setTimeout(start_spin, 1000);
        if ($(this).data('status') == 0){
            prepare_spin();
            $.ajax({    
                url: '/consult?from=getRoulette', type: 'POST', dataType: 'JSON',
                data: {
                },
                success: function(data){
                    console.log(data);

                    const items = data.rare.concat(data.common);

                    console.log(items);
                    var html = '<div class="wheel-rewards-slot jackpot opacity1" style="top:' + postions[0].top + 'px; left:' + postions[0].left + 'px;">';
                        html +=    '<div class="wheel-rewards-group">';
                        html +=       '<div class="nt-item-small">';
                        html +=         '<img src="<?php echo $site['assets']['images'] . '/items/' ?>' + data.jackpot[0].VNUM +'.png">';
                        html +=       '</div>';
                        html +=     '</div>';
                        html += '</div>';

                    for (let i = 0; i < 15; i++) {
                        html += '<div class="wheel-rewards-slot jackpot opacity1" style="top:' + postions[i+1].top + 'px; left:' + postions[i+1].left + 'px;">';
                        html +=    '<div class="wheel-rewards-group">';
                        html +=       '<div class="nt-item-small">';
                        html +=         '<img src="<?php echo $site['assets']['images'] . '/items/' ?>' + items[i].VNUM +'.png">';
                        html +=       '</div>';
                        html +=     '</div>';
                        html += '</div>';    
                    }

                    html += '<div class="wheel-button-play" data-status="0">';
                    html +=     '<p>Clean</p>';
                    html += '</div>';

                    $('#imgkolo').append(html);
                    
                    if (data.status === "ok"){

                        drawn_reward = data.reward_slot;
                        drawn_reward_details = data.reward_items;

                        
                        $('.wheel-field.drawn').animate({opacity: '1'}, 500)
                        setTimeout(start_spin, 1000); //it's just animation, reward is already known
                    } else {
                        $('.wheel-button-play').data('status', 0);
                        $('.wheel-button-play').find('p').html('Spin');
                    }
                },
                error: function(request, status, error){
                    if (request.status == 429){
                        $('.wheel-button-play').find('p').html('Wait...');
                        setTimeout(function() {
                            $('.wheel-button-play').data('status', 0);
                            $('.wheel-button-play').find('p').html('Spin');
                            $('.span-double-jackpot').removeClass('disabled');
                        }, 2000);
                    }
                }
            });
        } else if ($(this).data('status') == 1) {

        } else if ($(this).data('status') == 2) {
            clean_wheel();
        }
    
    });
});



var tick_delay = 66.25;
var degree = 0;
var ticks = 0;
var drawn_reward = 0;
var drawn_reward_details;

var spinning;
var slowing;

var tick_sound = new Audio("/sounds/tick.mp3");

var slowing_function = function(){
    slowing = setInterval(function(){

        degree += 22.5;
        if (degree >= 360){degree -= 360;}
        tick_delay += Math.pow(tick_delay / 25, 2);
        ticks++;
        if ($('input[name="sounds"]').val() == "1"){
            tick_sound.pause();
            tick_sound.currentTime = 0
            tick_sound.play();
        }

        $('.wheel-field.drawn').css('transform', 'rotate('+degree+'deg)')

        clearInterval(slowing);
        if (tick_delay < 2000) {slowing_function()}
        else { //IT STOPPED! CONGRATZ
            var animate_slot = drawn_reward - 4
            bounce_won($('.wheel-rewards-slot:eq('+animate_slot+') img'));
            add_to_saved();
            $('.wheel-button-play').data('status', 2);
            $('.wheel-button-play').find('p').html('Clean');
        }

    },tick_delay);
};

function prepare_spin(){
    $('.wheel-button-play').data('status', -1);
    $('.wheel-field.drawn').css('transform', 'rotate(0deg)')
}

var start_spin = function(){
    console.log("ss");
    drawn_reward += 4; //
    if (drawn_reward > 15){drawn_reward -= 16;}
    $('.wheel-button-play').data('status', 1);
    $('.wheel-button-play').find('p').html('Wait...');

    spinning = setInterval(function(){
        degree += 22.5;
        if (degree >= 360){degree -= 360;}
        ticks++;    
        
        if (ticks > 32 && ticks % 16 == drawn_reward){
            clearInterval(spinning);
            slowing_function()
        }

        $('.wheel-field.drawn').css('transform', 'rotate('+degree+'deg)')
    },tick_delay);  
};

function reset_wheel_values(){
    clearInterval(spinning);
    clearInterval(slowing);
    tick_delay = 66.25;
    degree = 0;
    ticks = 0;
    drawn_reward = 0;
}

function bounce_won(element) {
    var diff_height = element.height() * 0.7;
    var diff_witdh = element.width() * 0.7;

    
    for(i = 0; i < 3; i++) {
        element.animate({
            width: '+=' + diff_witdh / (i+1),
            height: '+=' + diff_height / (i+1),
            maxWidth: '+=' + diff_witdh / (i+1),
            maxHeight: '+=' + diff_height / (i+1),
        },200)
        .animate({
            width: '-=' + diff_witdh / (i+1),
            height: '-=' + diff_height / (i+1),
            maxWidth: '+=' + diff_witdh / (i+1),
            maxHeight: '+=' + diff_height / (i+1),
        },200)
    }        
}

function add_to_saved(){
    $.each(drawn_reward_details, function() {
        if ($('#all_drawn_rewards > div').length >= 56){
            $('#all_drawn_rewards > div:eq(55)').remove()
        }
        $('#all_drawn_rewards').prepend(this);
    });
    $('.delete-all-rewards').removeClass('disabled');
}

function clean_wheel(){
    $('.wheel-button-play').data('status', -1);
    
    reset_wheel_values()

    $('.wheel-rewards-slot img').animate({ opacity: 0, },500)
    $('.wheel-field.drawn').animate({ opacity: 0, },500)

    setTimeout(function() {
        $('.wheel-rewards-group .nt-item-small').remove();
        $('.wheel-button-play').data('status', 0);
        $('.wheel-button-play').find('p').html('Spin');
        $('.span-double-jackpot').removeClass('disabled');
    }, 700);
}
</script>