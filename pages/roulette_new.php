<div id="imgkolo" class="wheel">
    <!-- <input type="checkbox" name="sound" id="sound"> -->
    <img class="wheel-field jackpot" src="../assets/img/games/none.png" style="transform:rotate(0deg)">
    <img class="wheel-field jackpot jackpot-2" src="../assets/img/games/none.png" style="display:<?php if($site['double_jackpot'] == 0){echo 'none';}else{echo 'block';} ?>; transform:rotate(180deg)">
    <img class="wheel-field drawn" src="../assets/img/games/none.png" style="opacity: 1; transform: rotate(0deg);">

    <div class="wheel-button-play" data-status="0">
        <p class="w-100 spin">Spin <br><?php if($site['double_jackpot'] == 0){echo '150 coins';}else{echo '150 coins';} ?></p>
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
    
var vnum = 0;
var amount = 0;
var jackpot = "<?php echo $site['double_jackpot']; ?>";
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
        // setTimeout(start_spin, 1000);return;
        var character = $('#wheel-character').val();console.log($(this).data('status')==0);
        if (!character) {
                //    $.toast({
                //       heading: 'Validation Error',
                //       icon: 'error',
                //       text: "Please select your character",
                //       position: 'top-right',

                //    });
                notice('error', 'error', "Please select your character");
                _error = true;
                return;
            }
        if ($(this).data('status') == 0){
            prepare_spin();
            $.ajax({    
                url: '/consult?from=getRoulette', type: 'POST', dataType: 'JSON',
                data: {
                },
                success: function(data){

                    if (data.status == "failed"){
                        notice('error', 'error', data.message);
                    }

                    if (data.status === "ok"){

                        var reward_id = data.reward;
                        const items = shuffle(data.rare.concat(data.common));
                        if(data.jackpot.length == 2) {
                            $('.jackpot-2').css('display', 'block');
                        } else {
                            $('.jackpot-2').css('display', 'none');
                        }

                        for (let index = 0; index < items.length; index++) {
                            if(items[index].ID == reward_id){
                                console.log(index, "check");
                                if(index<7){
                                    drawn_reward = index+1;
                                    vnum = items[index].VNUM;
                                    amount = items[index].Amount;
                                } else {
                                    drawn_reward = index+2;
                                    vnum = items[index].VNUM;
                                    amount = items[index].Amount;
                                }
                                
                            }                        
                        }

                        if(data.jackpot[0].ID == reward_id){
                            drawn_reward = 0;
                            vnum = data.jackpot[0].image;
                            amount = data.jackpot[0].Amount;
                        } else if (data.jackpot.length == 2 && data.jackpot[1].ID == reward_id){
                            drawn_reward = 8;
                            vnum = data.jackpot[1].image;
                            amount = data.jackpot[1].Amount;
                        }

                        console.log(items);
                        var html = '<div class="wheel-rewards-slot jackpot opacity1" style="top:' + postions[0].top + 'px; left:' + postions[0].left + 'px;">';
                            html +=    '<div class="wheel-rewards-group">';
                            html +=       '<div class="nt-item-small">';
                            html +=         '<img src="<?php echo $site['assets']['images'] . '/items/' ?>' + data.jackpot[0].image +'.png">';
                            html +=       '</div>';
                            html +=     '</div>';
                            html += '</div>';
                            
                        if(data.jackpot.length == 2){
                            html += '<div class="wheel-rewards-slot jackpot opacity1" style="top:' + postions[8].top + 'px; left:' + postions[8].left + 'px;">';
                            html +=    '<div class="wheel-rewards-group">';
                            html +=       '<div class="nt-item-small">';
                            html +=         '<img src="<?php echo $site['assets']['images'] . '/items/' ?>' + data.jackpot[1].image +'.png">';
                            html +=       '</div>';
                            html +=     '</div>';
                            html += '</div>';
                        }
                            
                        if(data.jackpot.length != 2){
                            for (let i = 0; i < 15; i++) {
                                html += '<div class="wheel-rewards-slot jackpot opacity1" style="top:' + postions[i+1].top + 'px; left:' + postions[i+1].left + 'px;">';
                                html +=    '<div class="wheel-rewards-group">';
                                html +=       '<div class="nt-item-small">';
                                html +=         '<img src="<?php echo $site['assets']['images'] . '/items/' ?>' + items[i].image +'.png">';
                                html +=       '</div>';
                                html +=     '</div>';
                                html += '</div>';    
                            }
                        } else {
                            for (let i = 0; i < 14; i++) {
                                if(i<7){
                                    html += '<div class="wheel-rewards-slot jackpot opacity1" style="top:' + postions[i+1].top + 'px; left:' + postions[i+1].left + 'px;">';
                                    html +=    '<div class="wheel-rewards-group">';
                                    html +=       '<div class="nt-item-small">';
                                    html +=         '<img src="<?php echo $site['assets']['images'] . '/items/' ?>' + items[i].image +'.png">';
                                    html +=       '</div>';
                                    html +=     '</div>';
                                    html += '</div>';    
                                } else {
                                    html += '<div class="wheel-rewards-slot jackpot opacity1" style="top:' + postions[i+2].top + 'px; left:' + postions[i+2].left + 'px;">';
                                    html +=    '<div class="wheel-rewards-group">';
                                    html +=       '<div class="nt-item-small">';
                                    html +=         '<img src="<?php echo $site['assets']['images'] . '/items/' ?>' + items[i].image +'.png">';
                                    html +=       '</div>';
                                    html +=     '</div>';
                                    html += '</div>';    
                                }
                                
                            }
                        }

                        

                        $('#imgkolo').append(html);
                        
                        

                        // drawn_reward = 0;
                        // drawn_reward_details = data.reward_items;

                        
                        $('.wheel-field.drawn').animate({opacity: '1'}, 500)
                        setTimeout(start_spin, 1000); //it's just animation, reward is already known
                    } else {
                        $('.wheel-button-play').data('status', 0);
                        if(jackpot == 0){
                            $('.wheel-button-play').find('p').html('Spin <br>150 Coins');
                        } else {
                            $('.wheel-button-play').find('p').html('Spin <br>150 Coins');
                        }
                        
                    }
                },
                error: function(request, status, error){
                    if (request.status == 429){
                        $('.wheel-button-play').find('p').html('Wait...');
                        setTimeout(function() {
                            $('.wheel-button-play').data('status', 0);
                            if(jackpot == 0){
                                $('.wheel-button-play').find('p').html('Spin <br>150 Coins');
                            } else {
                                $('.wheel-button-play').find('p').html('Spin <br>150 Coins');
                            }
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

function shuffle(array) {
  let currentIndex = array.length,  randomIndex;

  // While there remain elements to shuffle.
  while (currentIndex != 0) {

    // Pick a remaining element.
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex--;

    // And swap it with the current element.
    [array[currentIndex], array[randomIndex]] = [
      array[randomIndex], array[currentIndex]];
  }

  return array;
}


var tick_delay = 66.25;
var degree = 0;
var ticks = 0;
var drawn_reward = 0;
var drawn_reward_details;

var spinning;
var slowing;

var tick_sound = new Audio("../assets/tick.mp3");

var slowing_function = function(){
    slowing = setInterval(function(){

        degree += 22.5;
        if (degree >= 360){degree -= 360;}
        tick_delay += Math.pow(tick_delay / 25, 2);
        ticks++;
        // if ($('input[name="sounds"]').val() == "1"){
            tick_sound.pause();
            tick_sound.currentTime = 0
            tick_sound.play();
        // }

        $('.wheel-field.drawn').css('transform', 'rotate('+degree+'deg)')

        clearInterval(slowing);
        if (tick_delay < 2000) {slowing_function()}
        else { //IT STOPPED! CONGRATZ
            var animate_slot = drawn_reward - 4
            bounce_won($('.wheel-rewards-slot:eq('+animate_slot+') img'));
            // add_to_saved();
            add_to_item();
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
    console.log( $('.wheel-button-play').data('status'));
    drawn_reward += 4; //
    if (drawn_reward > 15){drawn_reward -= 16;}
    $('.wheel-button-play').data('status', 1);
    console.log( $('.wheel-button-play').data('status'));
    $('.wheel-button-play').find('p').html('Wait...');

    spinning = setInterval(function(){
        degree += 22.5;
        if (degree >= 360){degree -= 360;}
        ticks++;   
        
        // if ($('input[name="sounds"]').val() == "1"){
            tick_sound.pause();
            tick_sound.currentTime = 0
            tick_sound.play();
        // }

        console.log(ticks, drawn_reward);
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
    // console.log("animation");
    // var diff_height = element.height() * 0.8;
    // var diff_witdh = element.width() * 0.8;

    
    // for(i = 0; i < 3; i++) {
    //     element.animate({
    //         width: '+=' + diff_witdh / (i+1),
    //         height: '+=' + diff_height / (i+1),
    //         maxWidth: '+=' + diff_witdh / (i+1),
    //         maxHeight: '+=' + diff_height / (i+1),
    //     },200)
    //     .animate({
    //         width: '-=' + diff_witdh / (i+1),
    //         height: '-=' + diff_height / (i+1),
    //         maxWidth: '+=' + diff_witdh / (i+1),
    //         maxHeight: '+=' + diff_height / (i+1),
    //     },200)
    // }  
    var keyframes = [
          {transform: 'scale3d(1, 1, 1)', offset: 0}, 
          {transform: 'scale3d(1.05, 1.05, 1.05)', offset: 0.5}, 
          {transform: 'scale3d(1, 1, 1)', offset: 1}];
    var timing = {duration: 900, iterations: 3};
    element.animate(keyframes, timing);      
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

function add_to_item(){
    console.log("tt");
    $.ajax({    
                url: '/consult?from=sendItem', type: 'POST', dataType: 'JSON',
                data: {
                    vnum: Number(vnum), 
                    amount: Number(amount),
                    char_id: $('#wheel-character').val()
                },
                success: function(data){
                    notice('success', 'success', 'sent the item succesfully');
                    // setTimeout(() => {
                    //             location.reload();
                    //         }, 3000);
                    $('#balance').html(data[0].balance);console.log(data[0].balance);
                },
                error: function(request, status, error){
                    
                }
            });
}

function clean_wheel(){
    $('.wheel-button-play').data('status', -1);
    
    reset_wheel_values()

    $('.wheel-rewards-slot img').animate({ opacity: 0, },500)
    $('.wheel-field.drawn').animate({ opacity: 0, },500)

    setTimeout(function() {
        $('.wheel-rewards-group .nt-item-small').remove();
        $('.wheel-button-play').data('status', 0);
        if(jackpot == 0){
            $('.wheel-button-play').find('p').html('Spin <br>150 Coins');
        } else {
            $('.wheel-button-play').find('p').html('Spin <br>150 Coins');
        }
        $('.span-double-jackpot').removeClass('disabled');
    }, 700);
}
</script>