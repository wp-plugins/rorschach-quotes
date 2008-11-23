<?php
/*
Plugin Name: Rorschach Quotes
Plugin URI: http://rad.maikeruon.com/inkblot/
Description: Adds the Rorschach Quotes widget, which displays randomly selected Rorschach quotes from the <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a> graphic novel. <strong>Rated Mature for graphic content.</strong>
Version: 1.0
Author: Michael Sisk
Author URI: http://maikeruon.com/
*/

function rorschach_quotes(){
 $quotes = array();
 
 $quotes[0] = '<blockquote class="rorschach"><p>Dog carcass in alley this morning, tire tread on burst stomach. This city is afraid of me. I have seen its true face.</p><p><cite>Rorschach\'s Journal, October 12<sup>th</sup>, 1985</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[1] = '<blockquote class="rorschach"><p>The streets are extended gutters and the gutters are full of blood and when the drains finally scab over, all the vermin will drown.</p><p><cite>Rorschach\'s Journal, October 12<sup>th</sup>, 1985</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[2] = '<blockquote class="rorschach"><p>The accumulated filth of all their sex and murder will foam up about their waists and all the whores and politicians will look up and shout <q>Save us!</q>&hellip; and I\'ll look down and whisper <q>no.</q></p><p><cite>Rorschach\'s Journal, October 12<sup>th</sup>, 1985</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[3] = '<blockquote class="rorschach"><p>They had a choice, all of them. They could have followed in the footsteps of good men like my father, or President Truman. Decent men, who believed in a day\'s work for a day\'s pay. Instead they followed the droppings of lechers and communists and didn\'t realize that the trail led over a precipice until it was too late. Don\'t tell me they didn\'t have a choice.</p><p><cite>Rorschach\'s Journal, October 12<sup>th</sup>, 1985</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[4] = '<blockquote class="rorschach"><p>Now the whole world stands on the brink, staring down into bloody hell, all those liberals and intellectuals and smooth-talkers&hellip; and all of a sudden, nobody can think of anything to say.</p><p><cite>Rorschach\'s Journal, October 12<sup>th</sup>, 1985</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[5] = '<blockquote class="rorschach"><p>Slept all day. Awoken at 4:37. Landlady complaining about smell. She has five children by five different fathers. I am sure she cheats on welfare.</p><p><cite>Rorschach\'s Journal, October 13<sup>th</sup>, 1985</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[6] = '<blockquote class="rorschach"><p>Beneath me, this awful city, it screams like an abattoir full of retarded children.</p><p><cite>Rorschach\'s Journal, October 13<sup>th</sup>, 1985</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[7] = '<blockquote class="rorschach"><p>The dusk reeds of fornication and bad consciences. I believe I shall take my exercise.</p><p><cite>Rorschach\'s Journal, October 13<sup>th</sup>, 1985</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[8] = '<blockquote class="rorschach"><p>This city is dying of rabies. Is the best I can do to wipe random flecks of foam from its lips?</p><p><cite>Rorschach\'s Journal, October 13<sup>th</sup>, 1985</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[9] = '<blockquote class="rorschach"><p>Never despair. Never surrender.</p><p><cite>Rorschach\'s Journal, October 13<sup>th</sup>, 1985</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[10] = '<blockquote class="rorschach"><p>I leave the human cockroaches to discuss their heroin and child pornography. I have business elsewhere, with a better class of person.</p><p><cite>Rorschach\'s Journal, October 13<sup>th</sup>, 1985</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[11] = '<blockquote class="rorschach"><p>Meeting with Veidt left bad taste in mouth. He is pampered and decadent, betraying even his own shallow, liberal affectations. Possibly homosexual? Must remember to investigate further.</p><p><cite>Rorschach\'s Journal, October 13<sup>th</sup>, 1985 8:30PM</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[12] = '<blockquote class="rorschach"><p>Why are so few of us left active, healthy, and without personality disorders?</p><p><cite>Rorschach\'s Journal, October 13<sup>th</sup>, 1985 8:30PM</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[13] = '<blockquote class="rorschach"><p>I shall go to them. I shall go and tell the indestructible man that someone plans to murder him.</p><p><cite>Rorschach\'s Journal, October 13<sup>th</sup>, 1985 8:30PM</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[14] = '<blockquote class="rorschach"><p>On Friday night, a comedian died in New York.</p><p><cite>Rorschach\'s Journal, October 13<sup>th</sup>, 1985 11:30PM</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[15] = '<blockquote class="rorschach"><p>Why does one death matter against so many? Because there is good and there is evil, and evil must be punished. Even in the face of Armageddon I shall not compromise in this.</p><p><cite>Rorschach\'s Journal, October 13<sup>th</sup>, 1985 11:30PM</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[16] = '<blockquote class="rorschach"><p>But there are so many deserving of retribution&hellip; and there is so little time.</p><p><cite>Rorschach\'s Journal, October 13<sup>th</sup>, 1985 11:30PM</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[17] = '<blockquote class="rorschach"><p>42<sup>nd</sup> Street: Women\'s breasts draped across every billboard, every display, littering the sidewalk.</p><p><cite>Rorschach\'s Journal, October 16<sup>th</sup>, 1985</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[18] = '<blockquote class="rorschach"><p>Was offered Swedish love and French love&hellip; but not American love. American love, like coke in green glass bottles&hellip; they don\'t make it anymore.</p><p><cite>Rorschach\'s Journal, October 16<sup>th</sup>, 1985</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[19] = '<blockquote class="rorschach"><p>Never mind. Answers soon. Nothing is insoluble. Nothing is hopeless. Not while there\'s life.</p><p><cite>Rorschach\'s Journal, October 16<sup>th</sup>, 1985</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[20] = '<blockquote class="rorschach"><p>In the cemetery, all the white crosses stood in rows, neat chalk marks on a giant scorecard. Is that what happens to us? A life of conflict with no time for friends&hellip; so that when it\'s done, only your enemies leave roses.</p><p><cite>Rorschach\'s Journal, October 16<sup>th</sup>, 1985</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[21] = '<blockquote class="rorschach"><p>Others bury their heads between the swollen teats of indulgence and gratification, piglets squirming beneath a sow for shelter&hellip; but there is no shelter&hellip; and the future is bearing down like an express train.</p><p><cite>Rorschach\'s Journal, October 16<sup>th</sup>, 1985</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[22] = '<blockquote class="rorschach"><p>Is everyone but me going mad? Over 40th street, an elephant was drifting. Beyond that, unseen, spy satellites. If they so much as narrow their glass eyes, we shall all be dead. This relentless world: there is only one sane response to it.</p><p><cite>Rorschach\'s Journal, October 21<sup>st</sup>, 1985</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[23] = '<blockquote class="rorschach"><p>Offices below, headstones marking daily graves of thousands. Inside, across clock faces, as observed as those of celebrities, hands commence final laps. Oblivion gallops closer, favoring the spur, sparing the reign. I think we will be gone soon.</p><p><cite>Rorschach\'s Journal, November 1<sup>st</sup>, 1985</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[24] = '<blockquote class="rorschach"><p>Appreciate your recent support and hope world survives long enough for this to reach you, but tanks are in East Berlin, and writing is on wall. For my own part, regret nothing. Have lived life free from compromise&hellip; and step into the shadow now without complaint.</p><p><cite>Rorschach\'s Journal, November 1<sup>st</sup>, 1985</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[25] = '<blockquote class="rorschach"><p>Hello, Daniel.</p><p><cite>Rorschach</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[26] = '<blockquote class="rorschach"><p>Got hungry waiting, helped myself to some beans. Hope you don\'t mind.</p><p><cite>Rorschach</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[27] = '<blockquote class="rorschach"><p>That\'s what they\'re saying about me now? That I\'m paranoid?</p><p><cite>Rorschach</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[28] = '<blockquote class="rorschach"><p>Implying nothing. Just an observation.</p><p><cite>Rorschach</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[29] = '<blockquote class="rorschach"><p>Yes. I remember. Used to come here often. Back when we were partners.</p><p><cite>Rorschach</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[30] = '<blockquote class="rorschach"><p>Guy went sidewalk diving, Friday night. I don\'t think he was alone when it happened.</p><p><cite>Rorschach</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[31] = '<blockquote class="rorschach"><p>I\'ve just broken this gentleman\'s little finger.</p><p><cite>Rorschach</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[32] = '<blockquote class="rorschach"><p>Lying. Do it again, broken arm. Not joking.</p><p><cite>Rorschach</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[33] = '<blockquote class="rorschach"><p>Funny story. Sounds unbelievable. Probably true.</p><p><cite>Rorschach</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[34] = '<blockquote class="rorschach"><p>Searched your house, before you got back. Knew you wouldn\'t mind. Found illegal drugs.</p><p><cite>Rorschach</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[35] = '<blockquote class="rorschach"><p>By the way, you need a stronger lock. That new one broke after one shove.</p><p><cite>Rorschach</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[36] = '<blockquote class="rorschach"><p><q>Behind you.</q></p><p><cite>Rorschach</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[37] = '<blockquote class="rorschach"><p>A pretty butterfly.</p><p><cite>Rorschach</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[38] = '<blockquote class="rorschach"><p>Some nice flowers.</p><p><cite>Rorschach</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[39] = '<blockquote class="rorschach"><p>You keep calling me Walter. I don\'t like you.</p><p><cite>Rorschach</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[40] = '<blockquote class="rorschach"><p>Fat. Wealthy. Think you understand pain. I\'ll tell you something, doctor. I\'ll tell you about Rorschach.</p><p><cite>Rorschach</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[41] = '<blockquote class="rorschach"><p>None of you understand. I\'m not locked up in here with you. You\'re locked up in here with me.</p><p><cite>Rorschach</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[42] = '<blockquote class="rorschach"><p>We do not do this thing because it is permitted. We do it because we have to. We do it because we are compelled.</p><p><cite>Rorschach</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[43] = '<blockquote class="rorschach"><p>Some of us have always lived on edge, Daniel. It is possible to survive there if you observe rules: just hang on by fingernails&hellip; and never look down.</p><p><cite>Rorschach</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[44] = '<blockquote class="rorschach"><p>Unnecessary? Cowering down here in sludge and pollution, conjuring names on screens, learning nothing: that is unnecessary. Give me smallest finger on man\'s hand. I\'ll produce information. Computer unnecessary.</p><p><cite>Rorschach</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[45] = '<blockquote class="rorschach"><p>You are&hellip; a good friend. I know that. I am sorry&hellip; that it is sometimes difficult.</p><p><cite>Rorschach</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[46] = '<blockquote class="rorschach"><p>Missed you while in prison, boys. Feels good to be back.</p><p><cite>Rorschach</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[47] = '<blockquote class="rorschach"><p>Don\'t worry&hellip; won\'t insult legendary underworld solidarity by suggesting you surrender name without torture.</p><p><cite>Rorschach</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[48] = '<blockquote class="rorschach"><p>Nice idea if you can afford to go first class with pharaohs&hellip; but judging by our departures, most of us travel steerage.</p><p><cite>Rorschach</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[49] = '<blockquote class="rorschach"><p>Joking, of course.</p><p><cite>Rorschach</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 $quotes[50] = '<blockquote class="rorschach"><p>No. Not even in the face of Armageddon.</p><p><cite>Rorschach</cite> | <a href="http://en.wikipedia.org/wiki/Watchmen">Watchmen</a></p></blockquote>';
 
 $the_quote = rand(0,50);
 echo $quotes[$the_quote];
}

function widget_init_rorschach_quotes(){
 if (!function_exists('register_sidebar_widget') || !function_exists('register_widget_control')) return;
 
 function widget_rorschach_quotes($args){
  extract($args);
  $options = get_option('widget_rorschach_quotes');
  $title = $options['title'];

  echo $before_widget;
  if(!empty($title)){echo $before_title.$title.$after_title;}
  rorschach_quotes();
  echo $after_widget;
 }
 
 function widget_rorschach_quotes_control(){
  $options = get_option('widget_rorschach_quotes');
  
  if($_POST['rorschach-quotes-submit']):
   $newoptions['title'] = strip_tags(stripslashes($_POST['rorschach-quotes-title']));
   if($options != $newoptions):
    $options = $newoptions;
    update_option('widget_rorschach_quotes', $options);
   endif;
  endif;
  
  $title = htmlspecialchars($options['title'], ENT_QUOTES);
  
  //begin widget form
  ?>
   <p><label>Title: <input type="text" class="widefat" id="rorschach-quotes-title" name="rorschach-quotes-title" value="<?php echo $title; ?>" /></label></p>
   <input type="hidden" name="rorschach-quotes-submit" id="rorschach-quotes-submit" value="1" />
  <?
  //end widget form
 }
 $widget_ops = array('description' => __("Displays randomly selected Rorschach quotes from the Watchmen graphic novel"));
 wp_register_sidebar_widget('rorschach-quotes','Rorschach Quote','widget_rorschach_quotes',$widget_ops);
 wp_register_widget_control('rorschach-quotes','Rorschach Quote', 'widget_rorschach_quotes_control',$widget_ops);
}add_action('widgets_init', 'widget_init_rorschach_quotes');
?>