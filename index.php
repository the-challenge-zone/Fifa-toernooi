<?php include('head.php')?>

<div class="background">
  <div class="transbox">
    <p><div class="container">
  <div class="row">
    <div class="col-md-6">
      <table class="table-condensed" style="width:100%">
        <tr>
          <td class="col-md-5">
            <div class="input-group">
              <div class="form-control">Beqa Bumbeishvili</div><span class="input-group-addon"><span class="badge pull-right">1</span></span>
            </div>
          </td>
          <td class="col-md-2" rowspan="2" style="padding:0px; position:relative; min-width:50px;">
            <div style="border-top: 2px solid #090; border-right: 2px solid #090; width:80%; height:25%; float: left; position:absolute; top:25%;"></div>
            <div style="border-bottom: 2px solid #f00; border-right: 2px solid #f00; width:80%; height:25%; float: left; position:absolute; top:50%;"></div>
            <div style="border-top: 2px solid #090; width: 20%; margin-left: 80%; float: right; position:absolute;"></div>
          </td>
          <td class="col-md-5" rowspan="2">
            <div class="input-group">
              <div class="form-control">Team 1</div><span class="input-group-addon"><span class="badge pull-right">0</span></span>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="input-group">
              <div class="form-control">Lasha Porchkhidze</div><span class="input-group-addon"><span class="badge pull-right">0</span></span>
            </div>
          </td>
        </tr>
      </table>
    </div>
  </div>
</div></p>
  </div>
  <div class="transbox">
    <p><h1 class="title">.: Brackets :.</h1>

<div class="wrapper">

    <div class="brackets">
    </div>

</div>

<script src="js/jquery-1.11.3.js"></script>
<script src="js/brackets.min.js"></script>

<script>

    var rounds;

    rounds = [


        //-- ronda 1
        [

            {
                player1: { name: "Player 111", winner: true, ID: 111, url: 'http://www.google.com' },
                player2: { name: "Player 211", ID: 211 }
            },

            {
                player1: { name: "Player 112", winner: true, ID: 112 },
                player2: { name: "Player 212", ID: 212 }
            },

            {
                player1: { name: "Player 113", winner: true, ID: 113 },
                player2: { name: "Player 213", ID: 213 }
            },

            {
                player1: { name: "Player 114", winner: true, ID: 114 },
                player2: { name: "Player 214", ID: 214 }
            },

            {
                player1: { name: "Player 115", winner: true, ID: 115, url: 'goggle.com' },
                player2: { name: "Player 215", ID: 215 }
            },

            {
                player1: { name: "Player 116", winner: true, ID: 116 },
                player2: { name: "Player 216", ID: 216 }
            },

            {
                player1: { name: "Player 117", winner: true, ID: 117 },
                player2: { name: "Player 217", ID: 217 }
            },

            {
                player1: { name: "Player 118", winner: true, ID: 118 },
                player2: { name: "Player 218", ID: 218 }
            },
        ],

        //-- ronda 2
        [

            {
                player1: { name: "Player 111", winner: true, ID: 111 },
                player2: { name: "Player 212", ID: 212 }
            },

            {
                player1: { name: "Player 113", winner: true, ID: 113 },
                player2: { name: "Player 214", ID: 214 }
            },

            {
                player1: { name: "Player 115", winner: true, ID: 115 },
                player2: { name: "Player 216", ID: 216 }
            },

            {
                player1: { name: "Player 117", winner: true, ID: 117 },
                player2: { name: "Player 218", ID: 218 }
            },
        ],

        //-- ronda 3
        [

            {
                player1: { name: "Player 111", winner: true, ID: 111 },
                player2: { name: "Player 113", ID: 113 }
            },

            {
                player1: { name: "Player 115", winner: true, ID: 115 },
                player2: { name: "Player 218", ID: 218 }
            },
        ],

        //-- ronda 4
        [

            {
                player1: { name: "Player 113", winner: true, ID: 113 },
                player2: { name: "Player 218", winner: true, ID: 218 },
            },
        ],
        //-- Champion
        [

            {
                player1: { name: "Player 113", winner: true, ID: 113 },
            },
        ],

    ];

    var titles = ['Ronda 1', 'Ronda 2', 'Ronda 3', 'Ronda 4', 'Ronda 5'];


    ;(function($){

        $(".brackets").brackets({
            titles: titles,
            rounds: rounds,
            color_title: 'black',
            border_color: '#00F',
            color_player: 'black',
            bg_player: 'white',
            color_player_hover: 'white',
            bg_player_hover: 'blue',
            border_radius_player: '10px',
            border_radius_lines: '10px',
        });

    })(jQuery);
</script></p>
  </div>
</div>
    


<?php include('Footer.php')?>
</html>

<!--https://codepen.io/baahubali92/pen/jXXxeG
contact form : Anup Kuma
license.txt if te open lifens that is linkt to the Contact.php
-->