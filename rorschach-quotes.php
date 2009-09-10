<?php
/*
Text Domain: rorschach_quotes
Plugin Name: Rorschach Quotes
Plugin URI: http://maikeruon.com/
Description: Adds the Rorschach Quotes widget, which displays randomly selected Rorschach quotes from the <a href="http://en.wikipedia.org/wiki/Watchmen" target="_blank">Watchmen</a> graphic novel.
Version: 2.0.1
Author: Michael Sisk
Author URI: http://maikeruon.com/
*/

class rorschach_quotes {
	const version = '2.0.1';
	
	private $quotes;
	
	function __construct() {
		$this->domain();
		
		//Set parameters
		$this->quotes     = array(
			array( __( "Dog carcass in alley this morning, tire tread on burst stomach. This city is afraid of me. I have seen its true face.", __CLASS__ ), __( "Rorschach's Journal", __CLASS__ ), "497937600" ),
			array( __( "The streets are extended gutters and the gutters are full of blood and when the drains finally scab over, all the vermin will drown.", __CLASS__ ), __( "Rorschach's Journal", __CLASS__ ), "497937600" ),
			array( __( "The accumulated filth of all their sex and murder will foam up about their waists and all the whores and politicians will look up and shout Save us!... and I'll look down and whisper no.", __CLASS__ ), __( "Rorschach's Journal", __CLASS__ ), "497937600" ),
			array( __( "They had a choice, all of them. They could have followed in the footsteps of good men like my father, or President Truman. Decent men, who believed in a day's work for a day's pay. Instead they followed the droppings of lechers and communists and didn't realize that the trail led over a precipice until it was too late. Don't tell me they didn't have a choice.", __CLASS__ ), __( "Rorschach's Journal", __CLASS__ ), "497937600" ),
			array( __( "Now the whole world stands on the brink, staring down into bloody hell, all those liberals and intellectuals and smooth-talkers... and all of a sudden, nobody can think of anything to say.", __CLASS__ ), __( "Rorschach's Journal", __CLASS__ ), "497937600" ),
			array( __( "Slept all day. Awoken at 4:37. Landlady complaining about smell. She has five children by five different fathers. I am sure she cheats on welfare.", __CLASS__ ), __( "Rorschach's Journal", __CLASS__ ), "498024000" ),
			array( __( "Beneath me, this awful city, it screams like an abattoir full of retarded children.", __CLASS__ ), __( "Rorschach's Journal", __CLASS__ ), "498024000" ),
			array( __( "The dusk reeds of fornication and bad consciences. I believe I shall take my exercise.", __CLASS__ ), __( "Rorschach's Journal", __CLASS__ ), "498024000" ),
			array( __( "This city is dying of rabies. Is the best I can do to wipe random flecks of foam from its lips?", __CLASS__ ), __( "Rorschach's Journal", __CLASS__ ), "498024000" ),
			array( __( "Never despair. Never surrender.", __CLASS__ ), __( "Rorschach's Journal", __CLASS__ ), "498024000" ),
			array( __( "I leave the human cockroaches to discuss their heroin and child pornography. I have business elsewhere, with a better class of person.", __CLASS__ ), __( "Rorschach's Journal", __CLASS__ ), "498024000" ),
			array( __( "Meeting with Veidt left bad taste in mouth. He is pampered and decadent, betraying even his own shallow, liberal affectations. Possibly homosexual? Must remember to investigate further.", __CLASS__ ), __( "Rorschach's Journal", __CLASS__ ), "498097800" ),
			array( __( "Why are so few of us left active, healthy, and without personality disorders?", __CLASS__ ), __( "Rorschach's Journal", __CLASS__ ), "498097800" ),
			array( __( "I shall go to them. I shall go and tell the indestructible man that someone plans to murder him.", __CLASS__ ), __( "Rorschach's Journal", __CLASS__ ), "498097800" ),
			array( __( "On Friday night, a comedian died in New York.", __CLASS__ ), __( "Rorschach's Journal", __CLASS__ ), "498108600" ),
			array( __( "Why does one death matter against so many? Because there is good and there is evil, and evil must be punished. Even in the face of Armageddon I shall not compromise in this.", __CLASS__ ), __( "Rorschach's Journal", __CLASS__ ), "498108600" ),
			array( __( "But there are so many deserving of retribution... and there is so little time.", __CLASS__ ), __( "Rorschach's Journal", __CLASS__ ), "498108600" ),
			array( __( "42nd Street: Women's breasts draped across every billboard, every display, littering the sidewalk.", __CLASS__ ), __( "Rorschach's Journal", __CLASS__ ), "498283200" ),
			array( __( "Was offered Swedish love and French love... but not American love. American love, like coke in green glass bottles... they don't make it anymore.", __CLASS__ ), __( "Rorschach's Journal", __CLASS__ ), "498283200" ),
			array( __( "Never mind. Answers soon. Nothing is insoluble. Nothing is hopeless. Not while there's life.", __CLASS__ ), __( "Rorschach's Journal", __CLASS__ ), "498283200" ),
			array( __( "In the cemetery, all the white crosses stood in rows, neat chalk marks on a giant scorecard. Is that what happens to us? A life of conflict with no time for friends... so that when it's done, only your enemies leave roses.", __CLASS__ ), __( "Rorschach's Journal", __CLASS__ ), "498283200" ),
			array( __( "Others bury their heads between the swollen teats of indulgence and gratification, piglets squirming beneath a sow for shelter... but there is no shelter... and the future is bearing down like an express train.", __CLASS__ ), __( "Rorschach's Journal", __CLASS__ ), "498283200" ),
			array( __( "Is everyone but me going mad? Over 40th street, an elephant was drifting. Beyond that, unseen, spy satellites. If they so much as narrow their glass eyes, we shall all be dead. This relentless world: there is only one sane response to it.", __CLASS__ ), __( "Rorschach's Journal", __CLASS__ ), "498715200" ),
			array( __( "Offices below, headstones marking daily graves of thousands. Inside, across clock faces, as observed as those of celebrities, hands commence final laps. Oblivion gallops closer, favoring the spur, sparing the reign. I think we will be gone soon.", __CLASS__ ), __( "Rorschach's Journal", __CLASS__ ), "499669200" ),
			array( __( "Appreciate your recent support and hope world survives long enough for this to reach you, but tanks are in East Berlin, and writing is on wall. For my own part, regret nothing. Have lived life free from compromise... and step into the shadow now without complaint.", __CLASS__ ), __( "Rorschach's Journal", __CLASS__ ), "499669200" ),
			array( __( "Hello, Daniel.", __CLASS__ ), "Rorschach" ),
			array( __( "Got hungry waiting, helped myself to some beans. Hope you don't mind.", __CLASS__ ), "Rorschach" ),
			array( __( "That's what they're saying about me now? That I'm paranoid?", __CLASS__ ), "Rorschach" ),
			array( __( "Implying nothing. Just an observation.", __CLASS__ ), "Rorschach" ),
			array( __( "Yes. I remember. Used to come here often. Back when we were partners.", __CLASS__ ), "Rorschach" ),
			array( __( "Guy went sidewalk diving, Friday night. I don't think he was alone when it happened.", __CLASS__ ), "Rorschach" ),
			array( __( "I've just broken this gentleman's little finger.", __CLASS__ ), "Rorschach" ),
			array( __( "Lying. Do it again, broken arm. Not joking.", __CLASS__ ), "Rorschach" ),
			array( __( "Funny story. Sounds unbelievable. Probably true.", __CLASS__ ), "Rorschach" ),
			array( __( "Searched your house, before you got back. Knew you wouldn't mind. Found illegal drugs.", __CLASS__ ), "Rorschach" ),
			array( __( "By the way, you need a stronger lock. That new one broke after one shove.", __CLASS__ ), "Rorschach" ),
			array( __( "Behind you.", __CLASS__ ), "Rorschach" ),
			array( __( "A pretty butterfly.", __CLASS__ ), "Rorschach" ),
			array( __( "Some nice flowers.", __CLASS__ ), "Rorschach" ),
			array( __( "You keep calling me Walter. I don't like you.", __CLASS__ ), "Rorschach" ),
			array( __( "Fat. Wealthy. Think you understand pain. I'll tell you something, doctor. I'll tell you about Rorschach.", __CLASS__ ), "Rorschach" ),
			array( __( "None of you understand. I'm not locked up in here with you. You're locked up in here with me.", __CLASS__ ), "Rorschach" ),
			array( __( "We do not do this thing because it is permitted. We do it because we have to. We do it because we are compelled.", __CLASS__ ), "Rorschach" ),
			array( __( "Some of us have always lived on edge, Daniel. It is possible to survive there if you observe rules: just hang on by fingernails... and never look down.", __CLASS__ ), "Rorschach" ),
			array( __( "Unnecessary? Cowering down here in sludge and pollution, conjuring names on screens, learning nothing: that is unnecessary. Give me smallest finger on man's hand. I'll produce information. Computer unnecessary.", __CLASS__ ), "Rorschach" ),
			array( __( "You are... a good friend. I know that. I am sorry... that it is sometimes difficult.", __CLASS__ ), "Rorschach" ),
			array( __( "Missed you while in prison, boys. Feels good to be back.", __CLASS__ ), "Rorschach" ),
			array( __( "Don't worry... won't insult legendary underworld solidarity by suggesting you surrender name without torture.", __CLASS__ ), "Rorschach" ),
			array( __( "Nice idea if you can afford to go first class with pharaohs... but judging by our departures, most of us travel steerage.", __CLASS__ ), "Rorschach" ),
			array( __( "Joking, of course.", __CLASS__ ), "Rorschach" ),
			array( __( "No. Not even in the face of Armageddon.", __CLASS__ ), "Rorschach" )
		);
		
		//Add widgets
		add_action( 'widgets_init', array( &$this, 'widgets_init' ) );
	}
	
	// ~~~~~~~~~~~~~~
	// Core Functions
	// ~~~~~~~~~~~~~~
	
	/** Load text domain for translations. */
	function domain() { load_plugin_textdomain( __CLASS__, $this->plugin_dir, dirname( plugin_basename( __FILE__ ) ) ); }
	
	/** Register plugin widgets. */
	function widgets_init() { register_widget( 'rorschach_quotes_widget' ); }
	
	/** Retrieve, update, or delete an option. */
	function option( $o, $v = false ) {
		if ( false === $v )
			return $this->options[ $o ];
		elseif ( null === $v )
			unset ( $this->options[ $o ] );
		else
			$this->options[ $o ] = $v;
		
		update_option( 'rorschach_quotes_options', $this->options );
	}
	
	//
	// 
	//
	
	/** Retrieves a Rorschach quote and returns it in the specified format. */
	function get_quote( $k = false, $f = '' ) {
		$r = rand( 0, count( $this->quotes ) - 1 );
		$q = ( false === $k ) ? $this->quotes[ $r ] : $this->quotes[ $k ];
		
		if ( $q[ 2 ] ) {
			$d = ', ' . date( 'F j, Y', $q[ 2 ] );
			$t = ( '12:00 AM' == date( 'g:i A', $q[ 2 ] ) ) ? '' : ' ' . date( 'g:i A', $q[ 2 ] );
			$u = date( 'c', $q[ 2 ] );
		};
		
		switch ( $f ) {
			case 'html':
				$quote  = '<div class="rorschach"><blockquote' . wpautop( wptexturize( $q[ 0 ] ) ) . '</blockquote><cite>' . $q[ 1 ] . '</cite>';
				$quote .= ( $q[ 2 ] ) ? '<time datetime=" ' . $u . '">' . $d . $t . '</time>' : '';
				$quote .= ' | <a href="http://en.wikipedia.org/wiki/Watchmen" target="_blank">Watchmen</a></div>';
			break;
			default: return $q;
		}
		
		return $quote;
	}
	
	/** Displays a Rorschach quote. */
	function quote() { echo $this->get_quote( false, 'html' ); }
} $rorschach_quotes = new rorschach_quotes();

class rorschach_quotes_widget extends WP_Widget {
	private $rorschach_quotes;
	
	function rorschach_quotes_widget() {
		$this->rorschach_quotes = new rorschach_quotes();
		
		$this->rorschach_quotes->domain();
		$widget_ops = array( 'description' => __( 'Displays randomly selected Rorschach quotes from the Watchmen graphic novel', 'rorschach_quotes' ) );
		$this->WP_Widget( 'rorschach_quotes', __( 'Rorschach Qoutes', 'rorschach_quotes' ), $widget_ops );
	}
	
	function widget( $args, $instance ) {
		echo $before_widget;
		$this->rorschach_quotes->quote();
		echo $after_widget;
	}
}
?>