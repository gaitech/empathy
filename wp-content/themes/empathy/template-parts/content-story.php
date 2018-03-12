<article id="post-<?php the_ID(); ?> " <?php post_class(); ?>>
		<?php   $id = get_the_ID();
		        $cat_info = get_the_category( $id );
		        $cat_info = $cat_info[0]->name;
		        $postData = get_post( $id );
				$name = $postData->post_title;
				$content = $postData->post_content; 
				$url = get_post_permalink( $id);
				$image = wp_get_attachment_url( get_post_thumbnail_id( $id ) );
				$custom_cont = get_post_meta($id, '', TRUE);
				$field_of_work = $custom_cont['field_of_work'][0];
				$detail_page_image = $custom_cont['detail_page_image_ideal_min_dimensions_2118x1050'][0];
				$de_page_img = wp_get_attachment_url( $detail_page_image );
				$country = $custom_cont['country'][0];
				$website_one = $custom_cont['website_one'][0];
				$website_two = $custom_cont['website_two'][0];
				$website_three = $custom_cont['website_three'][0];
				$organization_name = $custom_cont['organization_name'][0];
				$empathetic_leadership = $custom_cont['empathetic_leadership'][0];
				$purpose_of_orgnization = $custom_cont['purpose_of_orgnization'][0];
				$video_section_one = $custom_cont['video_section_one'][0];
				$first_video_caption = $custom_cont['first_video_caption'][0];
				$video_section_two = $custom_cont['video_section_two'][0];
				$second_video_caption = $custom_cont['second_video_caption'][0];
				$video_section_three = $custom_cont['video_section_three'][0];
				$third_video_caption = $custom_cont['third_video_caption'][0];
				$reference_article_title_one = $custom_cont['reference_article_title_one'][0];
				$reference_article_body_one = $custom_cont['reference_article_body_one'][0];
				$reference_article_title_two = $custom_cont['reference_article_title_two'][0];
				$reference_article_body_two = $custom_cont['reference_article_body_two'][0];
				$contributor = $custom_cont['contributor'][0];
				$contributor_img = wp_get_attachment_url( $contributor );
				$contributor_name = $custom_cont['contributor_name'][0];
				$contributor_description = $custom_cont['contributor_description'][0];
				$soundcloud_url = $custom_cont['soundcloud_url'][0];
				$countryList = array(
					'AF' => __( 'Afghanistan' ),
					'AL' => __( 'Albania' ),
					'DZ' => __( 'Algeria' ),
					'AS' => __( 'American Samoa' ),
					'AD' => __( 'Andorra' ),
					'AO' => __( 'Angola' ),
					'AI' => __( 'Anguilla' ),
					'AQ' => __( 'Antarctica' ),
					'AG' => __( 'Antigua and Barbuda' ),
					'AR' => __( 'Argentina' ),
					'AM' => __( 'Armenia' ),
					'AW' => __( 'Aruba' ),
					'AU' => __( 'Australia' ),
					'AT' => __( 'Austria' ),
					'AZ' => __( 'Azerbaijan' ),
					'BS' => __( 'Bahamas' ),
					'BH' => __( 'Bahrain' ),
					'BD' => __( 'Bangladesh' ),
					'BB' => __( 'Barbados' ),
					'BY' => __( 'Belarus' ),
					'BE' => __( 'Belgium' ),
					'BZ' => __( 'Belize' ),
					'BJ' => __( 'Benin' ),
					'BM' => __( 'Bermuda' ),
					'BT' => __( 'Bhutan' ),
					'BO' => __( 'Bolivia' ),
					'BA' => __( 'Bosnia and Herzegovina' ),
					'BW' => __( 'Botswana' ),
					'BV' => __( 'Bouvet Island' ),
					'BR' => __( 'Brazil' ),
					'BQ' => __( 'British Antarctic Territory' ),
					'IO' => __( 'British Indian Ocean Territory' ),
					'VG' => __( 'British Virgin Islands' ),
					'BN' => __( 'Brunei' ),
					'BG' => __( 'Bulgaria' ),
					'BF' => __( 'Burkina Faso' ),
					'BI' => __( 'Burundi' ),
					'KH' => __( 'Cambodia' ),
					'CM' => __( 'Cameroon' ),
					'CA' => __( 'Canada' ),
					'CT' => __( 'Canton and Enderbury Islands' ),
					'CV' => __( 'Cape Verde' ),
					'KY' => __( 'Cayman Islands' ),
					'CF' => __( 'Central African Republic' ),
					'TD' => __( 'Chad' ),
					'CL' => __( 'Chile' ),
					'CN' => __( 'China' ),
					'CX' => __( 'Christmas Island' ),
					'CC' => __( 'Cocos [Keeling] Islands' ),
					'CO' => __( 'Colombia' ),
					'KM' => __( 'Comoros' ),
					'CG' => __( 'Congo - Brazzaville' ),
					'CD' => __( 'Congo - Kinshasa' ),
					'CK' => __( 'Cook Islands' ),
					'CR' => __( 'Costa Rica' ),
					'HR' => __( 'Croatia' ),
					'CU' => __( 'Cuba' ),
					'CY' => __( 'Cyprus' ),
					'CZ' => __( 'Czech Republic' ),
					'CI' => __( 'Côte d’Ivoire' ),
					'DK' => __( 'Denmark' ),
					'DJ' => __( 'Djibouti' ),
					'DM' => __( 'Dominica' ),
					'DO' => __( 'Dominican Republic' ),
					'NQ' => __( 'Dronning Maud Land' ),
					'DD' => __( 'East Germany' ),
					'EC' => __( 'Ecuador' ),
					'EG' => __( 'Egypt' ),
					'SV' => __( 'El Salvador' ),
					'GQ' => __( 'Equatorial Guinea' ),
					'ER' => __( 'Eritrea' ),
					'EE' => __( 'Estonia' ),
					'ET' => __( 'Ethiopia' ),
					'FK' => __( 'Falkland Islands' ),
					'FO' => __( 'Faroe Islands' ),
					'FJ' => __( 'Fiji' ),
					'FI' => __( 'Finland' ),
					'FR' => __( 'France' ),
					'GF' => __( 'French Guiana' ),
					'PF' => __( 'French Polynesia' ),
					'TF' => __( 'French Southern Territories' ),
					'FQ' => __( 'French Southern and Antarctic Territories' ),
					'GA' => __( 'Gabon' ),
					'GM' => __( 'Gambia' ),
					'GE' => __( 'Georgia' ),
					'DE' => __( 'Germany' ),
					'GH' => __( 'Ghana' ),
					'GI' => __( 'Gibraltar' ),
					'GR' => __( 'Greece' ),
					'GL' => __( 'Greenland' ),
					'GD' => __( 'Grenada' ),
					'GP' => __( 'Guadeloupe' ),
					'GU' => __( 'Guam' ),
					'GT' => __( 'Guatemala' ),
					'GG' => __( 'Guernsey' ),
					'GN' => __( 'Guinea' ),
					'GW' => __( 'Guinea-Bissau' ),
					'GY' => __( 'Guyana' ),
					'HT' => __( 'Haiti' ),
					'HM' => __( 'Heard Island and McDonald Islands' ),
					'HN' => __( 'Honduras' ),
					'HK' => __( 'Hong Kong SAR China' ),
					'HU' => __( 'Hungary' ),
					'IS' => __( 'Iceland' ),
					'IN' => __( 'India' ),
					'ID' => __( 'Indonesia' ),
					'IR' => __( 'Iran' ),
					'IQ' => __( 'Iraq' ),
					'IE' => __( 'Ireland' ),
					'IM' => __( 'Isle of Man' ),
					'IL' => __( 'Israel' ),
					'IT' => __( 'Italy' ),
					'JM' => __( 'Jamaica' ),
					'JP' => __( 'Japan' ),
					'JE' => __( 'Jersey' ),
					'JT' => __( 'Johnston Island' ),
					'JO' => __( 'Jordan' ),
					'KZ' => __( 'Kazakhstan' ),
					'KE' => __( 'Kenya' ),
					'KI' => __( 'Kiribati' ),
					'KW' => __( 'Kuwait' ),
					'KG' => __( 'Kyrgyzstan' ),
					'LA' => __( 'Laos' ),
					'LV' => __( 'Latvia' ),
					'LB' => __( 'Lebanon' ),
					'LS' => __( 'Lesotho' ),
					'LR' => __( 'Liberia' ),
					'LY' => __( 'Libya' ),
					'LI' => __( 'Liechtenstein' ),
					'LT' => __( 'Lithuania' ),
					'LU' => __( 'Luxembourg' ),
					'MO' => __( 'Macau SAR China' ),
					'MK' => __( 'Macedonia' ),
					'MG' => __( 'Madagascar' ),
					'MW' => __( 'Malawi' ),
					'MY' => __( 'Malaysia' ),
					'MV' => __( 'Maldives' ),
					'ML' => __( 'Mali' ),
					'MT' => __( 'Malta' ),
					'MH' => __( 'Marshall Islands' ),
					'MQ' => __( 'Martinique' ),
					'MR' => __( 'Mauritania' ),
					'MU' => __( 'Mauritius' ),
					'YT' => __( 'Mayotte' ),
					'FX' => __( 'Metropolitan France' ),
					'MX' => __( 'Mexico' ),
					'FM' => __( 'Micronesia' ),
					'MI' => __( 'Midway Islands' ),
					'MD' => __( 'Moldova' ),
					'MC' => __( 'Monaco' ),
					'MN' => __( 'Mongolia' ),
					'ME' => __( 'Montenegro' ),
					'MS' => __( 'Montserrat' ),
					'MA' => __( 'Morocco' ),
					'MZ' => __( 'Mozambique' ),
					'MM' => __( 'Myanmar [Burma]' ),
					'NA' => __( 'Namibia' ),
					'NR' => __( 'Nauru' ),
					'NP' => __( 'Nepal' ),
					'NL' => __( 'Netherlands' ),
					'AN' => __( 'Netherlands Antilles' ),
					'NT' => __( 'Neutral Zone' ),
					'NC' => __( 'New Caledonia' ),
					'NZ' => __( 'New Zealand' ),
					'NI' => __( 'Nicaragua' ),
					'NE' => __( 'Niger' ),
					'NG' => __( 'Nigeria' ),
					'NU' => __( 'Niue' ),
					'NF' => __( 'Norfolk Island' ),
					'KP' => __( 'North Korea' ),
					'VD' => __( 'North Vietnam' ),
					'MP' => __( 'Northern Mariana Islands' ),
					'NO' => __( 'Norway' ),
					'OM' => __( 'Oman' ),
					'PC' => __( 'Pacific Islands Trust Territory' ),
					'PK' => __( 'Pakistan' ),
					'PW' => __( 'Palau' ),
					'PS' => __( 'Palestinian Territories' ),
					'PA' => __( 'Panama' ),
					'PZ' => __( 'Panama Canal Zone' ),
					'PG' => __( 'Papua New Guinea' ),
					'PY' => __( 'Paraguay' ),
					'YD' => __( "People's Democratic Republic of Yemen" ),
					'PE' => __( 'Peru' ),
					'PH' => __( 'Philippines' ),
					'PN' => __( 'Pitcairn Islands' ),
					'PL' => __( 'Poland' ),
					'PT' => __( 'Portugal' ),
					'PR' => __( 'Puerto Rico' ),
					'QA' => __( 'Qatar' ),
					'RO' => __( 'Romania' ),
					'RU' => __( 'Russia' ),
					'RW' => __( 'Rwanda' ),
					'RE' => __( 'Réunion' ),
					'BL' => __( 'Saint Barthélemy' ),
					'SH' => __( 'Saint Helena' ),
					'KN' => __( 'Saint Kitts and Nevis' ),
					'LC' => __( 'Saint Lucia' ),
					'MF' => __( 'Saint Martin' ),
					'PM' => __( 'Saint Pierre and Miquelon' ),
					'VC' => __( 'Saint Vincent and the Grenadines' ),
					'WS' => __( 'Samoa' ),
					'SM' => __( 'San Marino' ),
					'SA' => __( 'Saudi Arabia' ),
					'SN' => __( 'Senegal' ),
					'RS' => __( 'Serbia' ),
					'CS' => __( 'Serbia and Montenegro' ),
					'SC' => __( 'Seychelles' ),
					'SL' => __( 'Sierra Leone' ),
					'SG' => __( 'Singapore' ),
					'SK' => __( 'Slovakia' ),
					'SI' => __( 'Slovenia' ),
					'SB' => __( 'Solomon Islands' ),
					'SO' => __( 'Somalia' ),
					'ZA' => __( 'South Africa' ),
					'GS' => __( 'South Georgia and the South Sandwich Islands' ),
					'KR' => __( 'South Korea' ),
					'ES' => __( 'Spain' ),
					'LK' => __( 'Sri Lanka' ),
					'SD' => __( 'Sudan' ),
					'SR' => __( 'Suriname' ),
					'SJ' => __( 'Svalbard and Jan Mayen' ),
					'SZ' => __( 'Swaziland' ),
					'SE' => __( 'Sweden' ),
					'CH' => __( 'Switzerland' ),
					'SY' => __( 'Syria' ),
					'ST' => __( 'São Tomé and Príncipe' ),
					'TW' => __( 'Taiwan' ),
					'TJ' => __( 'Tajikistan' ),
					'TZ' => __( 'Tanzania' ),
					'TH' => __( 'Thailand' ),
					'TL' => __( 'Timor-Leste' ),
					'TG' => __( 'Togo' ),
					'TK' => __( 'Tokelau' ),
					'TO' => __( 'Tonga' ),
					'TT' => __( 'Trinidad and Tobago' ),
					'TN' => __( 'Tunisia' ),
					'TR' => __( 'Turkey' ),
					'TM' => __( 'Turkmenistan' ),
					'TC' => __( 'Turks and Caicos Islands' ),
					'TV' => __( 'Tuvalu' ),
					'UM' => __( 'U.S. Minor Outlying Islands' ),
					'PU' => __( 'U.S. Miscellaneous Pacific Islands' ),
					'VI' => __( 'U.S. Virgin Islands' ),
					'UG' => __( 'Uganda' ),
					'UA' => __( 'Ukraine' ),
					'SU' => __( 'Union of Soviet Socialist Republics' ),
					'AE' => __( 'United Arab Emirates' ),
					'GB' => __( 'United Kingdom' ),
					'US' => __( 'United States' ),
					'ZZ' => __( 'Unknown or Invalid Region' ),
					'UY' => __( 'Uruguay' ),
					'UZ' => __( 'Uzbekistan' ),
					'VU' => __( 'Vanuatu' ),
					'VA' => __( 'Vatican City' ),
					'VE' => __( 'Venezuela' ),
					'VN' => __( 'Vietnam' ),
					'WK' => __( 'Wake Island' ),
					'WF' => __( 'Wallis and Futuna' ),
					'EH' => __( 'Western Sahara' ),
					'YE' => __( 'Yemen' ),
					'ZM' => __( 'Zambia' ),
					'ZW' => __( 'Zimbabwe' ),
					'AX' => __( 'Åland Islands' ),
				);
            foreach ($countryList as $key => $value) {
            	if($key == $country) {
            		$countryname = $value;
            	}
            }

		?> 
		
	<div class="entry-content">
		<main class="main_detail__page">
			<div class="container">
				<div class="detail_page__contant">
					<div class="detail_banner__section">
						<div class="detail_banner__img">
							<figure>
								<img src="<?php echo $de_page_img; ?>">
							</figure>
						</div>
						<div class="detail_banner__contant">
							<div class="details_contant">
								<div class="members_heading">
									<h1><?php echo $name; ?></h1>
									<p>4 COMMENTS</p>
								</div>
								<aside class="left-sidebar">
									<div class="leadership_contant">
										<h3>Empathetic Leadership</h3>
										<p><?php echo $empathetic_leadership; ?></p>
									</div>
									<div class="Organization_contant">
										<h3>Purpose of Organization</h3>
										<p><?php echo $purpose_of_orgnization; ?></p>
									</div>
								</aside>
								<aside class="right-sidebar">
									<ul>
										<li>
											<h5>country</h5>
											<p><?php echo $countryname; ?></p>
										</li>
										<li>
											<h5>Organization</h5>
											<p><?php echo $organization_name; ?></p>
										</li>
										<li>
											<h5>website</h5>
											<p><?php echo $website_one; ?></p>
										</li>
									</ul>
								</aside>
							</div>
						</div>
						<div class="our_youtube__video">
							<div class="members_video__speach">
								<div class="video">
									<iframe width="410" height="200" src="<?php echo $video_section_one; ?>"></iframe>
									<caption class="video_caption"><h2><?php echo $first_video_caption; ?></h2></caption>
								</div>
								<div class="video">
									<iframe width="410" height="200" src="<?php echo $video_section_two; ?>"></iframe>
									<caption class="video_caption"><h2><?php echo $second_video_caption; ?></h2></caption>
								</div>
								<div class="video">
									<iframe width="410" height="200" src="<?php echo $video_section_three; ?>"></iframe>
									<caption class="video_caption"><h2><?php echo $third_video_caption; ?></h2></caption>
								</div>
							</div>
						</div>
						<article class="member_article">
							<div class="article_block">
								<div class="article_heading">
									<h2>ARTICLES</h2>
								</div>
								<div class="article_blocks">
									<?php if(($reference_article_title_one != "") && ($reference_article_body_one != "") && ($reference_article_title_two == "") && ($reference_article_body_two == "")) { ?>
									<h2><?php echo $reference_article_title_one; ?></h2>
									<p><?php echo $reference_article_body_one; ?></p>
									<a href="#">Read further</a>
									<?php } ?>
								</div>
								<div class="article_blocks">
									<?php if(($reference_article_title_one == "") && ($reference_article_body_one == "") && ($reference_article_title_two != "") && ($reference_article_body_two != "")) { ?>
									<h2><?php echo $reference_article_title_two; ?></h2>
									<p><?php echo $reference_article_body_two; ?></p>
									<a href="#">Read further</a>
									<?php } ?>
								</div>
								
								<?php if(($reference_article_title_one != "") && ($reference_article_body_one != "") && ($reference_article_title_two != "") && ($reference_article_body_two != "")) { ?>
								<div class="article_blocks">
									<h2><?php echo $reference_article_title_one; ?></h2>
									<p><?php echo $reference_article_body_one; ?></p>
									<a href="#">Read further</a>
								</div>
								<div class="article_blocks">
									<h2><?php echo $reference_article_title_two; ?></h2>
									<p><?php echo $reference_article_body_two; ?></p>
									<a href="#">Read further</a>
								</div>
								<?php } ?>
								
							</div>
						</article>
						<div class="ten_members__profile">
							<div class="members_profile">
								<div class="profile">
									<?php 
									 $author_id = $postData->post_author;
									 global $wpdb;
                                     $imageURL = $wpdb->get_results("SELECT meta_value from wp_usermeta WHERE meta_key = 'image' and user_id =". $author_id);
									?>
									<div class="porfife_pic">
										<figure>
											<img src="<?php echo $imageURL[0]->meta_value; ?>">
										</figure>
									</div>
									<div class="profile_details">
										<span>WRITTEN BY</span>
										<h3><?php echo get_the_author_meta('nickname'); ?></h3>
										<p><?php echo get_the_author_meta( 'contributor_description' ); ?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</main>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
