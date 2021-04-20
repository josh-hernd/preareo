<!-- Hold Header with Navigation Bar -->
    <header id='header_Nav'>
        <div class='nav_wrapper'>
            <!-- Hold Logo -->
            <div class='logo_helper'>
                <a href='https://preareo.com/'><img src='https://preareo.com/images/PreAreo-logo.svg' alt='' sizes='' srcset=''></a>
            </div>
            <!-- Main Menu  -->
            <div id='main_menu' class='full_menu'></div>
            <div id='user_login' class='user_log'>
                <ul>
                    <li><button class="phnBtn">Call Us</button></li>
                    <li><a href='https://member.preareo.com/'>Sign up or Log in</a></li>
                </ul>
            </div>

            <!-- Mobile Menu -->
            <div id='mobile_menu_wrap' class='toggle_menu'>
                <!-- Mobile Toggler -->
                <div id='toggler' class='toggle_mobile'>
                    <svg id='open' width='31' height='31' viewBox='0 0 31 22' fill='none'
                        xmlns='http://www.w3.org/2000/svg'>
                        <line y1='1.5' x2='30.0833' y2='1.5' stroke='#3F9CAD' stroke-width='3' />
                        <line y1='11' x2='30.0833' y2='11' stroke='#3F9CAD' stroke-width='3' />
                        <line y1='20.5' x2='30.0833' y2='20.5' stroke='#3F9CAD' stroke-width='3' />
                    </svg>
                </div>
                <!-- Mobile Menu Container -->
                <div id='mobile_menu' class='mob_menu'>
                    <div id='user_login' class='user_log'>
                        <ul>
                        <li><button class="phnBtn">Call Us</button></li>
                            <li><a href='https://member.preareo.com/'>Sign up or Log in</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
<!--Side nav-->
<div id="fbwrap" class='follow fop'>
    <ul>
        <li><a href='https://www.facebook.com/preareo' target="_blank"><i class="fab fa-facebook-square" style="font-size: 2rem!important;"></i></a></li>
    </ul>
    <div id="opsoc" class="fop">
        <i class="fas fa-chevron-right"></i>
    </div>
</div>
<script>
    var opFoo = document.getElementById("opsoc");
    opFoo.addEventListener("click", opFool);
    
    function remV(){ 
        setTimeout(function(){ 
            document.getElementById("fbwrap").classList.remove('fop');
            opFoo.classList.remove('fop');
        }, 5000);
    }
    remV();
    function opFool(){
        document.getElementById("fbwrap").className += ' fop';
        opFoo.className += ' fop';
        remV();
    }
</script>