<?php
/*Estoy hacciendo un cambio en GitHub*/
function texturize($text) {
	$output = '';
	// Capture tags and everything inside them
	$textarr = preg_split("/(<.*>)/Us", $text, -1, PREG_SPLIT_DELIM_CAPTURE);
	$stop = count($textarr); $next = true; // loop stuff
	for ($i = 0; $i < $stop; $i++) {
		$curl = $textarr[$i];

		if (isset($curl{0}) && '<' != $curl{0} && $next) { // If it's not a tag
			$curl = str_replace('---', '&#8212;', $curl);
			$curl = preg_replace('/(\s)--(\s)/', '$1&#8212;$2', $curl);
			$curl = str_replace('--', '&#8211;', $curl);
			$curl = str_replace('...', '&#8230;', $curl);
			$curl = str_replace('``', '&#8220;', $curl);

			// This is a hack, look at this more later. It works pretty well though.
			$cockney = array("'tain't","'twere","'twas","'tis","'twill","'til","'bout","'nuff","'round");
			$cockneyreplace = array("&#8217;tain&#8217;t","&#8217;twere","&#8217;twas","&#8217;tis","&#8217;twill","&#8217;til","&#8217;bout","&#8217;nuff","&#8217;round");
			$curl = str_replace($cockney, $cockneyreplace, $curl);

			$curl = preg_replace("/'s/", '&#8217;s', $curl);
			$curl = preg_replace("/'(\d\d(?:&#8217;|')?s)/", "&#8217;$1", $curl);
			$curl = preg_replace('/(\s|\A|")\'/', '$1&#8216;', $curl);
			$curl = preg_replace('/(\d+)"/', '$1&#8243;', $curl);
			$curl = preg_replace("/(\d+)'/", '$1&#8242;', $curl);
			$curl = preg_replace("/(\S)'([^'\s])/", "$1&#8217;$2", $curl);
			$curl = preg_replace('/(\s|\A)"(?!\s)/', '$1&#8220;$2', $curl);
			$curl = preg_replace('/"(\s|\S|\Z)/', '&#8221;$1', $curl);
			$curl = preg_replace("/'([\s.]|\Z)/", '&#8217;$1', $curl);
			$curl = preg_replace("/ \(tm\)/i", ' &#8482;', $curl);
			$curl = str_replace("''", '&#8221;', $curl);
			
			$curl = preg_replace('/(d+)x(\d+)/', "$1&#215;$2", $curl);

		} elseif (strstr($curl, '<code') || strstr($curl, '<pre') || strstr($curl, '<kbd' || strstr($curl, '<style') || strstr($curl, '<script'))) {
			// strstr is fast
			$next = false;
		} else {
			$next = true;
		}
		$curl = preg_replace('/&([^#])(?![a-z12]{1,8};)/', '&#038;$1', $curl);
		$output .= $curl;
	}
	return $output;
}

function clean_pre($text) {
	$text = str_replace('<br />', '', $text);
	$text = str_replace('<p>', "\n", $text);
	$text = str_replace('</p>', '', $text);
	return $text;
}

function autop($pee, $br = 1) {
	$pee = $pee . "\n"; // just to make things a little easier, pad the end
	$pee = preg_replace('|<br />\s*<br />|', "\n\n", $pee);
	// Space things out a little
	$pee = preg_replace('!(<(?:table|thead|tfoot|caption|colgroup|tbody|tr|td|th|div|dl|dd|dt|ul|ol|li|pre|select|form|blockquote|math|p|h[1-6])[^>]*>)!', "\n$1", $pee); 
	$pee = preg_replace('!(</(?:table|thead|tfoot|caption|colgroup|tbody|tr|td|th|div|dl|dd|dt|ul|ol|li|pre|select|form|blockquote|math|p|h[1-6])>)!', "$1\n", $pee);
	$pee = str_replace(array("\r\n", "\r"), "\n", $pee); // cross-platform newlines 
	$pee = preg_replace("/\n\n+/", "\n\n", $pee); // take care of duplicates
	$pee = preg_replace('/\n?(.+?)(?:\n\s*\n|\z)/s', "\t<p>$1</p>\n", $pee); // make paragraphs, including one at the end 
	$pee = preg_replace('|<p>\s*?</p>|', '', $pee); // under certain strange conditions it could create a P of entirely whitespace 
    $pee = preg_replace('!<p>\s*(</?(?:table|thead|tfoot|caption|colgroup|tbody|tr|td|th|div|dl|dd|dt|ul|ol|li|hr|pre|select|form|blockquote|math|p|h[1-6])[^>]*>)\s*</p>!', "$1", $pee); // don't pee all over a tag
	$pee = preg_replace("|<p>(<li.+?)</p>|", "$1", $pee); // problem with nested lists
	$pee = preg_replace('|<p><blockquote([^>]*)>|i', "<blockquote$1><p>", $pee);
	$pee = str_replace('</blockquote></p>', '</p></blockquote>', $pee);
	$pee = preg_replace('!<p>\s*(</?(?:table|thead|tfoot|caption|colgroup|tbody|tr|td|th|div|dl|dd|dt|ul|ol|li|hr|pre|select|form|blockquote|math|p|h[1-6])[^>]*>)!', "$1", $pee);
	$pee = preg_replace('!(</?(?:table|thead|tfoot|caption|colgroup|tbody|tr|td|th|div|dl|dd|dt|ul|ol|li|pre|select|form|blockquote|math|p|h[1-6])[^>]*>)\s*</p>!', "$1", $pee); 
	if ($br) $pee = preg_replace('|(?<!<br />)\s*\n|', "<br />\n", $pee); // optionally make line breaks
	$pee = preg_replace('!(</?(?:table|thead|tfoot|caption|tbody|tr|td|th|div|dl|dd|dt|ul|ol|li|pre|select|form|blockquote|math|p|h[1-6])[^>]*>)\s*<br />!', "$1", $pee);
	$pee = preg_replace('!<br />(\s*</?(?:p|li|div|dl|dd|dt|th|pre|td|ul|ol)>)!', '$1', $pee);
	$pee = preg_replace('!(<pre.*?>)(.*?)</pre>!ise', " stripslashes('$1') .  clean_pre('$2')  . '</pre>' ", $pee);
	
	return $pee; 
}


function seems_utf8($Str) { # by bmorel at ssi dot fr
	for ($i=0; $i<strlen($Str); $i++) {
		if (ord($Str[$i]) < 0x80) continue; # 0bbbbbbb
		elseif ((ord($Str[$i]) & 0xE0) == 0xC0) $n=1; # 110bbbbb
		elseif ((ord($Str[$i]) & 0xF0) == 0xE0) $n=2; # 1110bbbb
		elseif ((ord($Str[$i]) & 0xF8) == 0xF0) $n=3; # 11110bbb
		elseif ((ord($Str[$i]) & 0xFC) == 0xF8) $n=4; # 111110bb
		elseif ((ord($Str[$i]) & 0xFE) == 0xFC) $n=5; # 1111110b
		else return false; # Does not match any model
		for ($j=0; $j<$n; $j++) { # n bytes matching 10bbbbbb follow ?
			if ((++$i == strlen($Str)) || ((ord($Str[$i]) & 0xC0) != 0x80))
			return false;
		}
	}
	return true;
}

function specialchars( $text, $quotes = 0 ) {
	// Like htmlspecialchars except don't double-encode HTML entities
	$text = preg_replace('/&([^#])(?![a-z12]{1,8};)/', '&#038;$1', $text);-
	$text = str_replace('<', '&lt;', $text);
	$text = str_replace('>', '&gt;', $text);
	if ( $quotes ) {
		$text = str_replace('"', '&quot;', $text);
		$text = str_replace("'", '&#039;', $text);
	}
	return $text;
}

function utf8_uri_encode( $utf8_string ) {
  $unicode = '';        
  $values = array();
  $num_octets = 1;
        
  for ($i = 0; $i < strlen( $utf8_string ); $i++ ) {

    $value = ord( $utf8_string[ $i ] );
            
    if ( $value < 128 ) {
      $unicode .= chr($value);
    } else {
      if ( count( $values ) == 0 ) $num_octets = ( $value < 224 ) ? 2 : 3;
                
      $values[] = $value;
      
      if ( count( $values ) == $num_octets ) {
	if ($num_octets == 3) {
	  $unicode .= '%' . dechex($values[0]) . '%' . dechex($values[1]) . '%' . dechex($values[2]);
	} else {
	  $unicode .= '%' . dechex($values[0]) . '%' . dechex($values[1]);
	}

	$values = array();
	$num_octets = 1;
      }
    }
  }

  return $unicode;    
}

function remove_accents($string) {
	if (seems_utf8($string)) {
		$chars = array(// Decompositions for Latin-1 Supplement
									 chr(195).chr(128) => 'A', chr(195).chr(129) => 'A',
									 chr(195).chr(130) => 'A', chr(195).chr(131) => 'A',
									 chr(195).chr(132) => 'A', chr(195).chr(133) => 'A',
									 chr(195).chr(135) => 'C', chr(195).chr(136) => 'E',
									 chr(195).chr(137) => 'E', chr(195).chr(138) => 'E',
									 chr(195).chr(139) => 'E', chr(195).chr(140) => 'I',
									 chr(195).chr(141) => 'I', chr(195).chr(142) => 'I',
									 chr(195).chr(143) => 'I', chr(195).chr(145) => 'N',
									 chr(195).chr(146) => 'O', chr(195).chr(147) => 'O',
									 chr(195).chr(148) => 'O', chr(195).chr(149) => 'O',
									 chr(195).chr(150) => 'O', chr(195).chr(153) => 'U',
									 chr(195).chr(154) => 'U', chr(195).chr(155) => 'U',
									 chr(195).chr(156) => 'U', chr(195).chr(157) => 'Y',
									 chr(195).chr(160) => 'a', chr(195).chr(161) => 'a',
									 chr(195).chr(162) => 'a', chr(195).chr(163) => 'a',
									 chr(195).chr(164) => 'a', chr(195).chr(165) => 'a',
									 chr(195).chr(167) => 'c', chr(195).chr(168) => 'e',
									 chr(195).chr(169) => 'e', chr(195).chr(170) => 'e',
									 chr(195).chr(171) => 'e', chr(195).chr(172) => 'i',
									 chr(195).chr(173) => 'i', chr(195).chr(174) => 'i',
									 chr(195).chr(175) => 'i', chr(195).chr(177) => 'n',
									 chr(195).chr(178) => 'o', chr(195).chr(179) => 'o',
									 chr(195).chr(180) => 'o', chr(195).chr(181) => 'o',
									 chr(195).chr(182) => 'o', chr(195).chr(182) => 'o',
									 chr(195).chr(185) => 'u', chr(195).chr(186) => 'u',
									 chr(195).chr(187) => 'u', chr(195).chr(188) => 'u',
									 chr(195).chr(189) => 'y', chr(195).chr(191) => 'y',
									 // Decompositions for Latin Extended-A
									 // TODO: Finish me.
									 chr(197).chr(146) => 'OE', chr(197).chr(147) => 'oe',
									 chr(197).chr(160) => 'S', chr(197).chr(161) => 's',
									 chr(197).chr(189) => 'Z', chr(197).chr(190) => 'z',
									 // Euro Sign
									 chr(226).chr(130).chr(172) => 'E');

		$string = strtr($string, $chars);
	} else {
		// Assume ISO-8859-1 if not UTF-8
		$chars['in'] = chr(128).chr(131).chr(138).chr(142).chr(154).chr(158)
			.chr(159).chr(162).chr(165).chr(181).chr(192).chr(193).chr(194)
			.chr(195).chr(196).chr(197).chr(199).chr(200).chr(201).chr(202)
			.chr(203).chr(204).chr(205).chr(206).chr(207).chr(209).chr(210)
			.chr(211).chr(212).chr(213).chr(214).chr(216).chr(217).chr(218)
			.chr(219).chr(220).chr(221).chr(224).chr(225).chr(226).chr(227)
			.chr(228).chr(229).chr(231).chr(232).chr(233).chr(234).chr(235)
			.chr(236).chr(237).chr(238).chr(239).chr(241).chr(242).chr(243)
			.chr(244).chr(245).chr(246).chr(248).chr(249).chr(250).chr(251)
			.chr(252).chr(253).chr(255);

		$chars['out'] = "EfSZszYcYuAAAAAACEEEEIIIINOOOOOOUUUUYaaaaaaceeeeiiiinoooooouuuuyy";

		$string = strtr($string, $chars['in'], $chars['out']);
		$double_chars['in'] = array(chr(140), chr(156), chr(198), chr(208), chr(222), chr(223), chr(230), chr(240), chr(254));
		$double_chars['out'] = array('OE', 'oe', 'AE', 'DH', 'TH', 'ss', 'ae', 'dh', 'th');
		$string = str_replace($double_chars['in'], $double_chars['out'], $string);
	}

	return $string;
}

function sanitize_title($title) {
	$title = trim($title);
	$title = strip_tags($title);
	return $title;
}

function global_sanitize( $array ) {
	foreach ($array as $k => $v) {
		if ( is_array($v) ) {
		$array[$k] = global_sanitize($v);
		} 
		else {
			if ( get_magic_quotes_gpc() )
				$array[$k] = trim($v);
			else
				$array[$k] = addslashes( trim($v) );
		}
	}
	return $array;
}
	
function sanitize_title_with_dashes($title) {
	$title = sanitize_title($title);
	// Preserve escaped octets.
	$title = preg_replace('|%([a-fA-F0-9][a-fA-F0-9])|', '---$1---', $title);
	// Remove percent signs that are not part of an octet.
	$title = str_replace('%', '', $title);
	// Restore octets.
	$title = preg_replace('|---([a-fA-F0-9][a-fA-F0-9])---|', '%$1', $title);

	$title = remove_accents($title);
	if (seems_utf8($title)) {
		if (function_exists('mb_strtolower')) {
			$title = mb_strtolower($title, 'UTF-8');
		}
		$title = utf8_uri_encode($title);
	}

	$title = strtolower($title);
	$title = preg_replace('/&.+?;/', '', $title); // kill entities
	$title = preg_replace('/[^%a-z0-9 _-]/', '', $title);
	$title = preg_replace('/\s+/', '-', $title);
	$title = preg_replace('|-+|', '-', $title);
	$title = trim($title, '-');

	return $title;
}

function sanitize_tag($tag) {
	$tag = sanitize_title_with_dashes($tag);
	$tag = str_replace('-', '', $tag);
	return $tag;
}

function convert_chars($content, $flag = 'obsolete') { 
	// Translation of invalid Unicode references range to valid range
	$wp_htmltranswinuni = array(
	'&#128;' => '&#8364;', // the Euro sign
	'&#129;' => '',
	'&#130;' => '&#8218;', // these are Windows CP1252 specific characters
	'&#131;' => '&#402;',  // they would look weird on non-Windows browsers
	'&#132;' => '&#8222;',
	'&#133;' => '&#8230;',
	'&#134;' => '&#8224;',
	'&#135;' => '&#8225;',
	'&#136;' => '&#710;',
	'&#137;' => '&#8240;',
	'&#138;' => '&#352;',
	'&#139;' => '&#8249;',
	'&#140;' => '&#338;',
	'&#141;' => '',
	'&#142;' => '&#382;',
	'&#143;' => '',
	'&#144;' => '',
	'&#145;' => '&#8216;',
	'&#146;' => '&#8217;',
	'&#147;' => '&#8220;',
	'&#148;' => '&#8221;',
	'&#149;' => '&#8226;',
	'&#150;' => '&#8211;',
	'&#151;' => '&#8212;',
	'&#152;' => '&#732;',
	'&#153;' => '&#8482;',
	'&#154;' => '&#353;',
	'&#155;' => '&#8250;',
	'&#156;' => '&#339;',
	'&#157;' => '',
	'&#158;' => '',
	'&#159;' => '&#376;'
	);

	// Remove metadata tags
	$content = preg_replace('/<title>(.+?)<\/title>/','',$content);
	$content = preg_replace('/<category>(.+?)<\/category>/','',$content);

	// Converts lone & characters into &#38; (a.k.a. &amp;)
	$content = preg_replace('/&([^#])(?![a-z]{1,8};)/i', '&#038;$1', $content);

	// Fix Word pasting
	$content = strtr($content, $wp_htmltranswinuni);

	// Just a little XHTML help
	$content = str_replace('<br>', '<br />', $content);
	$content = str_replace('<hr>', '<hr />', $content);

	return $content;
}

function funky_javascript_fix($text) {
	// Fixes for browsers' javascript bugs
	global $is_macIE, $is_winIE;
	
	if ( $is_winIE || $is_macIE )
		$text =  preg_replace("/\%u([0-9A-F]{4,4})/e",  "'&#'.base_convert('\\1',16,10).';'", $text);
	
	return $text;
}

/*
 balanceTags
 
 Balances Tags of string using a modified stack.
 
 @param text      Text to be balanced
 @return          Returns balanced text
 @author          Leonard Lin (leonard@acm.org)
 @version         v1.1
 @date            November 4, 2001
 @license         GPL v2.0
 @notes           
 @changelog       
 ---  Modified by Scott Reilly (coffee2code) 02 Aug 2004
             1.2  ***TODO*** Make better - change loop condition to $text
             1.1  Fixed handling of append/stack pop order of end text
                  Added Cleaning Hooks
             1.0  First Version
*/
function balanceTags($text, $is_comment = 0) {
	
	if (get_settings('use_balanceTags') == 0) {
		return $text;
	}

	$tagstack = array(); $stacksize = 0; $tagqueue = ''; $newtext = '';

	# WP bug fix for comments - in case you REALLY meant to type '< !--'
	$text = str_replace('< !--', '<    !--', $text);
	# WP bug fix for LOVE <3 (and other situations with '<' before a number)
	$text = preg_replace('#<([0-9]{1})#', '&lt;$1', $text);

	while (preg_match("/<(\/?\w*)\s*([^>]*)>/",$text,$regex)) {
		$newtext .= $tagqueue;

		$i = strpos($text,$regex[0]);
		$l = strlen($regex[0]);

		// clear the shifter
		$tagqueue = '';
		// Pop or Push
		if ($regex[1][0] == "/") { // End Tag
			$tag = strtolower(substr($regex[1],1));
			// if too many closing tags
			if($stacksize <= 0) { 
				$tag = '';
				//or close to be safe $tag = '/' . $tag;
			}
			// if stacktop value = tag close value then pop
			else if ($tagstack[$stacksize - 1] == $tag) { // found closing tag
				$tag = '</' . $tag . '>'; // Close Tag
				// Pop
				array_pop ($tagstack);
				$stacksize--;
			} else { // closing tag not at top, search for it
				for ($j=$stacksize-1;$j>=0;$j--) {
					if ($tagstack[$j] == $tag) {
					// add tag to tagqueue
						for ($k=$stacksize-1;$k>=$j;$k--){
							$tagqueue .= '</' . array_pop ($tagstack) . '>';
							$stacksize--;
						}
						break;
					}
				}
				$tag = '';
			}
		} else { // Begin Tag
			$tag = strtolower($regex[1]);

			// Tag Cleaning

			// If self-closing or '', don't do anything.
			if((substr($regex[2],-1) == '/') || ($tag == '')) {
			}
			// ElseIf it's a known single-entity tag but it doesn't close itself, do so
			elseif ($tag == 'br' || $tag == 'img' || $tag == 'hr' || $tag == 'input') {
				$regex[2] .= '/';
			} else {	// Push the tag onto the stack
				// If the top of the stack is the same as the tag we want to push, close previous tag
				if (($stacksize > 0) && ($tag != 'div') && ($tagstack[$stacksize - 1] == $tag)) {
					$tagqueue = '</' . array_pop ($tagstack) . '>';
					$stacksize--;
				}
				$stacksize = array_push ($tagstack, $tag);
			}

			// Attributes
			$attributes = $regex[2];
			if($attributes) {
				$attributes = ' '.$attributes;
			}
			$tag = '<'.$tag.$attributes.'>';
			//If already queuing a close tag, then put this tag on, too
			if ($tagqueue) {
				$tagqueue .= $tag;
				$tag = '';
			}
		}
		$newtext .= substr($text,0,$i) . $tag;
		$text = substr($text,$i+$l);
	}  

	// Clear Tag Queue
	$newtext .= $tagqueue;

	// Add Remaining text
	$newtext .= $text;

	// Empty Stack
	while($x = array_pop($tagstack)) {
		$newtext .= '</' . $x . '>'; // Add remaining tags to close
	}

	// WP fix for the bug with HTML comments
	$newtext = str_replace("< !--","<!--",$newtext);
	$newtext = str_replace("<    !--","< !--",$newtext);

	return $newtext;
}


function format_to_edit($content) {
	$content = apply_filters('format_to_edit', $content);
	$content = htmlspecialchars($content);
	return $content;
}

function format_to_post($content) {
	global $wpdb;
	$content = apply_filters('format_to_post', $content);
	return $content;
}

function zeroise($number,$threshold) { // function to add leading zeros when necessary
	return sprintf('%0'.$threshold.'s', $number);
	}


function backslashit($string) {
	$string = preg_replace('/([a-z])/i', '\\\\\1', $string);
	return $string;
}

function trailingslashit($string) {
    if ( '/' != substr($string, -1)) {
        $string .= '/';
    }
    return $string;
}

function addslashes_gpc($gpc) {
	if (!get_magic_quotes_gpc()) {
		$gpc = addslashes($gpc);
	}
	return $gpc;
}

function antispambot($emailaddy, $mailto=0) {
	$emailNOSPAMaddy = '';
	srand ((float) microtime() * 1000000);
	for ($i = 0; $i < strlen($emailaddy); $i = $i + 1) {
		$j = floor(rand(0, 1+$mailto));
		if ($j==0) {
			$emailNOSPAMaddy .= '&#'.ord(substr($emailaddy,$i,1)).';';
		} elseif ($j==1) {
			$emailNOSPAMaddy .= substr($emailaddy,$i,1);
		} elseif ($j==2) {
			$emailNOSPAMaddy .= '%'.zeroise(dechex(ord(substr($emailaddy, $i, 1))), 2);
		}
	}
	$emailNOSPAMaddy = str_replace('@','&#64;',$emailNOSPAMaddy);
	return $emailNOSPAMaddy;
}

function make_clickable($ret) {
	$ret = ' ' . $ret . ' ';
	$ret = preg_replace("#([\s>])(https?)://([^\s<>{}()]+[^\s.,<>{}()])#i", "$1<a href='$2://$3' rel='nofollow'>$2://$3</a>", $ret);
	$ret = preg_replace("#(\s)www\.([a-z0-9\-]+)\.([a-z0-9\-.\~]+)((?:/[^ <>{}()\n\r]*[^., <>{}()\n\r]?)?)#i", "$1<a href='http://www.$2.$3$4' rel='nofollow'>www.$2.$3$4</a>", $ret);
	$ret = preg_replace("#(\s)([a-z0-9\-_.]+)@([^,< \n\r]+)#i", "$1<a href=\"mailto:$2@$3\">$2@$3</a>", $ret);
	$ret = trim($ret);
	return $ret;
}

function wp_rel_nofollow( $text ) {
	$text = preg_replace('|<a (.+?)>|i', '<a $1 rel="nofollow">', $text);
	return $text;
}

function convert_smilies($text) {
	global $wp_smiliessearch, $wp_smiliesreplace;
    $output = '';
	if (get_settings('use_smilies')) {
		// HTML loop taken from texturize function, could possible be consolidated
		$textarr = preg_split("/(<.*>)/U", $text, -1, PREG_SPLIT_DELIM_CAPTURE); // capture the tags as well as in between
		$stop = count($textarr);// loop stuff
		for ($i = 0; $i < $stop; $i++) {
			$content = $textarr[$i];
			if ((strlen($content) > 0) && ('<' != $content{0})) { // If it's not a tag
				$content = str_replace($wp_smiliessearch, $wp_smiliesreplace, $content);
			}
			$output .= $content;
		}
	} else {
		// return default text.
		$output = $text;
	}
	return $output;
}


function is_email($user_email) {
	$chars = "/^([a-z0-9+_]|\\-|\\.)+@(([a-z0-9_]|\\-)+\\.)+[a-z]{2,6}\$/i";
	if(strstr($user_email, '@') && strstr($user_email, '.')) {
		if (preg_match($chars, $user_email)) {
			return true;
		} else {
			return false;
		}
	} else {
		return false;
	}
}


function strip_all_but_one_link($text, $mylink) {
	$match_link = '#(<a.+?href.+?'.'>)(.+?)(</a>)#';
	preg_match_all($match_link, $text, $matches);
	$count = count($matches[0]);
	for ($i=0; $i<$count; $i++) {
		if (!strstr($matches[0][$i], $mylink)) {
			$text = str_replace($matches[0][$i], $matches[2][$i], $text);
		}
	}
	return $text;
}


// used by wp-mail to handle charsets in email subjects
function wp_iso_descrambler($string) {
  /* this may only work with iso-8859-1, I'm afraid */
  if (!preg_match('#\=\?(.+)\?Q\?(.+)\?\=#i', $string, $matches)) {
    return $string;
  } else {
    $subject = str_replace('_', ' ', $matches[2]);
    $subject = preg_replace('#\=([0-9a-f]{2})#ei', "chr(hexdec(strtolower('$1')))", $subject);
    return $subject;
  }
}


// give it a date, it will give you the same date as GMT
function get_gmt_from_date($string) {
  // note: this only substracts $time_difference from the given date
  preg_match('#([0-9]{1,4})-([0-9]{1,2})-([0-9]{1,2}) ([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2})#', $string, $matches);
  $string_time = gmmktime($matches[4], $matches[5], $matches[6], $matches[2], $matches[3], $matches[1]);
  $string_gmt = gmdate('Y-m-d H:i:s', $string_time - get_settings('gmt_offset') * 3600);
  return $string_gmt;
}

// give it a GMT date, it will give you the same date with $time_difference added
function get_date_from_gmt($string) {
  // note: this only adds $time_difference to the given date
  preg_match('#([0-9]{1,4})-([0-9]{1,2})-([0-9]{1,2}) ([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2})#', $string, $matches);
  $string_time = gmmktime($matches[4], $matches[5], $matches[6], $matches[2], $matches[3], $matches[1]);
  $string_localtime = gmdate('Y-m-d H:i:s', $string_time + get_settings('gmt_offset')*3600);
  return $string_localtime;
}

// computes an offset in seconds from an iso8601 timezone
function iso8601_timezone_to_offset($timezone) {
  // $timezone is either 'Z' or '[+|-]hhmm'
  if ($timezone == 'Z') {
    $offset = 0;
  } else {
    $sign    = (substr($timezone, 0, 1) == '+') ? 1 : -1;
    $hours   = intval(substr($timezone, 1, 2));
    $minutes = intval(substr($timezone, 3, 4)) / 60;
    $offset  = $sign * 3600 * ($hours + $minutes);
  }
  return $offset;
}

// converts an iso8601 date to MySQL DateTime format used by post_date[_gmt]
function iso8601_to_datetime($date_string, $timezone = 'USER') {
  if ($timezone == 'GMT') {
    preg_match('#([0-9]{4})([0-9]{2})([0-9]{2})T([0-9]{2}):([0-9]{2}):([0-9]{2})(Z|[\+|\-][0-9]{2,4}){0,1}#', $date_string, $date_bits);
    if (!empty($date_bits[7])) { // we have a timezone, so let's compute an offset
      $offset = iso8601_timezone_to_offset($date_bits[7]);
    } else { // we don't have a timezone, so we assume user local timezone (not server's!)
      $offset = 3600 * get_settings('gmt_offset');
    }
    $timestamp = gmmktime($date_bits[4], $date_bits[5], $date_bits[6], $date_bits[2], $date_bits[3], $date_bits[1]);
    $timestamp -= $offset;
    return gmdate('Y-m-d H:i:s', $timestamp);
  } elseif ($timezone == 'USER') {
    return preg_replace('#([0-9]{4})([0-9]{2})([0-9]{2})T([0-9]{2}):([0-9]{2}):([0-9]{2})(Z|[\+|\-][0-9]{2,4}){0,1}#', '$1-$2-$3 $4:$5:$6', $date_string);
  }
}

function popuplinks($text) {
	// Comment text in popup windows should be filtered through this.
	// Right now it's a moderately dumb function, ideally it would detect whether
	// a target or rel attribute was already there and adjust its actions accordingly.
	$text = preg_replace('/<a (.+?)>/i', "<a $1 target='_blank' rel='external'>", $text);
	return $text;
}

function sanitize_email($email) {
	return preg_replace('/[^a-z0-9+_.@-]/i', '', $email);
}

function human_time_diff( $from, $to = '' ) {     
	if ( empty($to) )
		$to = time();
	$diff = (int) ($to - $from);
	if ($diff <= 3600) {
		$mins = round($diff / 60);
		if ($mins <= 1)
			$since = __('1 min');
		else
			$since = sprintf( __('%s mins'), $mins);
	} else if (($diff <= 86400) && ($diff > 3600)) {
		$hours = round($diff / 3600);
		if ($hours <= 1)
			$since = __('1 hour');
		else 
			$since = sprintf( __('%s hours'), $hours );
	} elseif ($diff >= 86400) {
		$days = round($diff / 86400);
		if ($days <= 1)
			$since = __('1 day');
		else
			$since = sprintf( __('%s days'), $days );
	}
	return $since;
}

function trim_excerpt( $text ) { // Fakes an excerpt if needed
	global $post;
	if ( '' == $text ) {
		$text = $post->post_content;
		$text = strip_tags( $text );
		$blah = explode(' ', $text);
		$excerpt_length = 55;
		if (count($blah) > $excerpt_length) {
		$k = $excerpt_length;
		$use_dotdotdot = 1;
		} else {
		$k = count($blah);
		$use_dotdotdot = 0;
		}
		$excerpt = '';
		for ($i=0; $i<$k; $i++) {
		$excerpt .= $blah[$i].' ';
		}
		$excerpt .= ($use_dotdotdot) ? '[...]' : '';
		$text = $excerpt;
	} // end if no excerpt
	return $text;
}

?>
