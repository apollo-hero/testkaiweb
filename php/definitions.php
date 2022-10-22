<?php

define('CONTROL','Control');

// USER TABLE

define(	'USER',				'accounts'					);
define(	'USER_ID',			'Id'					);
define(	'USER_RANGE',		'Authority'					);
define(	'USER_NICK',		'Name'						);
define(	'USER_EMAIL',		'Email'						);
define(	'USER_PSWD',		'Password'					);
define(	'USER_FRST_NAME',	'user_frst_name'			);
define(	'USER_LAST_NAME',	'user_lst_name'				);
define(	'USER_MIDL_NAME',	'user_mdl_name'				);
define(	'USER_COUNTRY',		'user_country'				);
define(	'USER_DISCORD',		'user_discord'				);
define(	'USER_SCRTY_QUEST',	'user_security_question_1'	);
define(	'USER_SCRTY_ANSW',	'user_security_answer_1'	);
define(	'USER_REG_TIME',	'CreatedAt'	);
define(	'USER_IP',			'RegistrationIP'			);
define(	'USER_BALANCE',		'Coins'						);
define(	'USER_REFERER_ID',	'ReferrerId'				);
define(	'USER_BANK_MONEY',	'BankMoney'					);
define(	'USER_DAILY_RWRD',	'DailyRewardSent'			);

// CHARACTER TABLE

define(	'CHAR',				'characters'		);
define(	'CHAR_ID',			'Id'	);
define(	'CHAR_LEVEL',		'Level'			);
define(	'CHAR_USR_ID',		'AccountId'		);
define(	'CHAR_NICK',		'Name'			);
define(	'CHAR_HERO_LEVEL',	'HeroLevel'		);
define(	'CHAR_REPUTATION',	'Reputation'	);
define(	'CHAR_GENDER',		'Gender'		);
define(	'CHAR_CLASS',		'Class'			);

// COINS

define(	'STORE_COINS',				'CoinsWeb'	);
define(	'STORE_COINS_ID',	 		'CoinsId'			);
define(	'STORE_COINS_AMOUNT',	 	'Coins'				);
define(	'STORE_COINS_PRICE',	 	'Price'				);
define(	'STORE_COINS_DESCRIPTION', 	'Description'		);
define(	'STORE_COINS_RANKING', 		'store_coin_ranking');

// SHOP CATEGORIES

define(	'CATEGORY',				'CategoriesShop'	);
define(	'CATEGORY_ID',			'categoriesid'	);
define(	'CATEGORY_NAME',		'name'			);
define(	'CATEGORY_VISIBILITY',	'visibility'	);

// SECOND CATEGORIES

define(	'S_CATEGORY',		'SecondCategoriesShop'		);
define(	'S_CATEGORY_ID',	'secondcategoriesid'	);
define(	'S_CATEGORY_NAME',	'name'					);
define(	'S_CATEGORY_ID_F',	'categoriesid'			);

// SHOP ITEMS

define(	'STORE_ITEMS',				'ShopItems'			);
define(	'STORE_ITEMS_ID',			'productid'				);
define(	'STORE_ITEMS_VNUM',			'vnum'					);
define(	'STORE_ITEMS_IMAGE',		'image'					);
define( 'STORE_ITEMS_CATEGORY', 	'categoriesid'			);
define( 'STORE_ITEMS_CATEGORY_2', 	'secondcategoriesid'	);
define( 'STORE_ITEMS_DESCRIPTION', 	'description'			);
define( 'STORE_ITEMS_PRICE', 		'price'					);
define( 'STORE_ITEMS_RANKING', 		'store_item_ranking'	);
define( 'STORE_ITEMS_TYPE', 		'type'					);
define(	'STORE_ITEMS_PURCHASE_N', 	'number_p'				);
define(	'STORE_ITEMS_RARE', 		'rare'					);
define(	'STORE_ITEMS_UPGRADE', 		'upgrade'				);
define(	'STORE_ITEMS_LEVEL', 		'level'					);
define(	'STORE_ITEMS_AMOUNT', 		'amount'				);
define(	'STORE_ITEMS_AMOUNT_CHOOSE','chooseamount'			);
define( 'STORE_ITEMS_JACKPOT', 		'issuperjackpot'		);
define( 'STORE_ITEMS_VISIBILITY',	'visibility'			);
define( 'STORE_ITEMS_ROULETTE' , 	'roulette'				);

// ITEMS

define(	'ITEM',				'Item'		);
define(	'ITEM_VNUM',		'vnum'		);
define(	'ITEM_NAME',		'name'		);
define(	'ITEM_PRODUCT_ID', 	'productid'	);
define( 'ITEM_IMAGE',		'image');

// CART

define(	'CART',					'Cart'	);
define(	'CART_ID', 				'CartId'				);
define(	'CART_ACCOUNT_ID',		'AccountId'				);
define(	'CART_CHARACTER_ID',	'CharacterId'			);
define(	'CART_PRODUCT_ID', 		'ProductId'				);
define(	'CART_VNUM', 			'VNum'					);
define(	'CART_PRICE', 			'Price'					);
define(	'CART_IMAGE',			'Image'					);
define(	'CART_AMOUNT',			'Amount'				);
define(	'CART_ITEM_QUANTITY',	'item_quantity'			);
define(	'CART_TOTAL_PRICE',		'TotalPrice'			);

// NEWS 

define(	'NEWS',					'articles'	);
define(	'NEWS_ARTICLE_ID',		'id'			);
define(	'NEWS_ARTICLE_TITLE',	'article_title'	);
define(	'NEWS_ARTICLE_BODY',	'article_body'	);
define(	'NEWS_ARTICLE_AUTOR',	'article_autor'	);
define(	'NEWS_ARTICLE_DATE',	'article_date'	);
define(	'NEWS_ARTICLE_PIC',		'article_pic'	);

// ACTIVITY LOG

define(	'LOG',				'ActivityLogWeb'	);
define(	'LOG_ID',			'ID'				);
define(	'LOG_IP',			'log_ip'			);
define(	'LOG_DATE',			'log_date'			);
define(	'LOG_TIME',			'log_time'			);
define(	'LOG_USER_ID',		'log_user_id'		);
define(	'LOG_DESCRIPTION',	'log_description'	);

// PAYMENTS

define(	'PAYMENTS',				'PaymentsWeb'	);
define(	'PAYMENTS_ID',			'ID'			);
define(	'PAYMENTS_TRANS_ID',	'TransactionID'	);
define(	'PAYMENTS_PAYER_EMAIL',	'PayerEmail'	);
define(	'PAYMENTS_PAYER_ID',	'PayerID'		);
define(	'PAYMENTS_DATE',		'Date'			);
define(	'PAYMENTS_TIME',		'Time'			);
define(	'PAYMENTS_METHOD',		'Method'		);
define(	'PAYMENTS_DESCRIPTION',	'Description'	);
define(	'PAYMENTS_AMOUNT',		'Amount'		);
define(	'PAYMENTS_CURRENCY',	'Currency'		);

// PAYMENT REQUEST

define(	'PAY_REQ',			'PaymentReqWeb'	);
define(	'PAY_REQ_ID',		'ID'			);
define(	'PAY_REQ_USER_ID',	'UserID'		);
define(	'PAY_REQ_METHOD',	'Method'		);
define(	'PAY_REQ_DATE',		'Date'			);
define(	'PAY_REQ_TIME',		'Time'			);
define(	'PAY_REQ_STATUS',	'Status'		);
define(	'PAY_REQ_COINS_ID',	'CoinsId'		);
define(	'PAY_REQ_CODE',		'Code'			);
define(	'PAY_REQ_DISCOUNT',	'Discount'		);
define(	'PAY_REQ_BONUS',	'Bonus'			);

// PENALTY LOG

define(	'PENALTY',				'PenaltyLog'	);
define(	'PENALTY_ID',			'PenaltyLogId'	);
define(	'PENALTY_USER_ID',		'AccountId'		);
define(	'PENALTY_IP',			'IP'			);
define(	'PENALTY_ADMIN_NAME',	'AdminName'		);
define(	'PENALTY_DATE_END',		'DateEnd'		);
define(	'PENALTY_DATE_START',	'DateStart'		);
define(	'PENALTY_STATUS',		'Penalty'		);
define(	'PENALTY_REASON',		'Reason'		);

// CHANNELS

define(	'CHANNELS',				'ChannelsWeb'	);
define(	'CHANNELS_ID',			'ID'		);
define(	'CHANNELS_NAME',		'Name'		);
define(	'CHANNELS_PORT',		'Port'		);

// MAINTENANCE LOG

define(	'MAINTENANCE',			'MaintenanceLog');
define(	'MAINTENANCE_ID',		'LogId'			);
define(	'MAINTENANCE_END',		'DateEnd'		);
define(	'MAINTENANCE_START',	'DateStart'		);
define(	'MAINTENANCE_REASON',	'Reason'		);

// FAMILY

define( 'FAMILY', 		'Family'		);
define( 'FAMILY_ID', 	'FamilyId'		);
define( 'FAMILY_NAME', 	'Name'			);
define( 'FAMILY_LVL', 	'FamilyLevel'	);

// FAMILY CHARACTER

define( 'FAM_CH', 			'FamilyCharacter'	);
define( 'FAM_CH_ID', 		'FamilyCharacterId'	);
define( 'FAM_AUTH', 		'Authority'			);
define( 'FAM_FAM_ID', 		'FamilyId'			);
define( 'FAM_CH_CH_ID', 	'CharacterId'		);


// REDEEM PRIZE

define( 'REDEEM_TABLE',	 			'RedeemPrizeWebsite'		);
define( 'REDEEM_ID',	 			'ID'				);
define( 'REDEEM_PRIZE_ACCOUNT_ID', 	'reedem_account_id'	);
define( 'REDEEM_PRIZE_ID', 			'reedem_prize_id'	);

// ROULETTE

define( 'ROULETTE',	 			'RouletteWeb'	);
define( 'ROULETTE_ID',	 		'ID'		);
define( 'ROULETTE_VNUM', 		'VNUM'		);
define( 'ROULETTE_AMOUNT', 		'Amount'	);
define( 'ROULETTE_RARE', 		'Rare'		);

//// USER ROLES ////

define( 'ROLE_CLOSED', 			'-3' );
define( 'ROLE_BANNED', 			'-2' );
define( 'ROLE_UNCONFIRMED',		'-1' );
define( 'ROLE_USER',			'0'  );
define( 'ROLE_VIP',				'1'  );
define( 'ROLE_VIPPLUS',			'3'  );
define( 'ROLE_VIPPLUSPLUS',		'5'  );
define( 'ROLE_DONATOR',			'10' );
define( 'ROLE_DONATORPLUS',		'15' );
define( 'ROLE_DonatorPlusPlus',	'20' );
define( 'ROLE_MODERATOR',		'25' );
define( 'ROLE_BETAGAMETESTER',	'30' );
define( 'ROLE_GAMEMASTER',		'40' );
define( 'ROLE_SUPERAMEMASTER',	'500' );
define( 'ROLE_COMMUNITYMANAGER','900' );
define( 'ROLE_GAMEADMIN',	'1000' );
define( 'ROLE_OWNER',			'1337' );
define( 'ROLE_ROOT',			'30000');

?>
