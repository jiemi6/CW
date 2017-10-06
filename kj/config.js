// 彩票开奖配置
exports.cp=[
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	{                                                                                                           //
		title:'重庆时时彩',                                                                               //
		source:'麦八',                                                                                 		//
		name:'cqssc',                                                                                           //
		enable:true,                                                                                            //
		timer:'cqssc',                                                                                          //
		option:{                                                                                                //
			host:"api.biid.bid",                                                                                   //
			timeout:50000,                                                                                      //
			path: '/ssc/cqssc/',                                                                      //重
			headers:{                                                                                           //庆
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                             //时
			}                                                                                                   //时
		},                                                                                                      //彩
		parse:function(str){                                                                                    //
			try{                                                                                                //
				str=str.substr(0,200);	                                                                        //
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;              //
				var m;                                                                                          //
				if(m=str.match(reg)){                                                                           //
					return {                                                                                    //
						type:1,                                                                                 //
						time:m[3],                                                                              //
						number:m[1].replace(/^(\d{8})(\d{3})$/, '$1-$2'),                                                                    //
						data:m[2]                                                                               //
					};                                                                                          //
				}					                                                                            //
			}catch(err){                                                                                        //
				throw('--------重庆时时彩解析数据不正确');                                                //
			}                                                                                                   //
		}                                                                                                       //
	},	                                                                                                        //
                                                                                                                //

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	{                                                                                                           //
		title:'新疆时时彩',                                                                           	    	//
		source:'麦八',                                                                                 	//
		name:'xjssc',                                                                                           //
		enable:true,                                                                                            //
		timer:'xjssc',                                                                                          //
		option:{                                                                                                //
			host:"api.biid.bid",                                                                                   //
			timeout:50000,                                                                                      //
			path: '/ssc/xjssc/',                                                                   	//疆
			headers:{                                                                                           //时
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                             //时
			}                                                                                                   //彩
		},                                                                                                      //
		parse:function(str){                                                                                    //
			try{                                                                                                //
				str=str.substr(0,200);	                                                                        //
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;              //
				var m;                                                                                          //
				if(m=str.match(reg)){                                                                           //
					return {                                                                                    //
						type:12,                                                                                //
						time:m[3],                                                                              //
						number:m[1].replace(/^(\d{8})(\d{2})$/, '$1-$2'),                                                                            //
						data:m[2]                                                                               //
					};                                                                                          //
				}					                                                                            //
			}catch(err){                                                                                        //
				throw('--------新疆福利彩票解析数据不正确');                                                    //
			}                                                                                                   //
		}                                                                                                       //新
	},	                                                                                                        //疆
                                                                                                                //时

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	{                                                                                                           //
		title:'天津时时彩',                                                                           	    	//
		source:'麦八',                                                                                //
		name:'tjssc',                                                                                           //
		enable:true,                                                                                            //
		timer:'tjssc',                                                                                          //
		option:{                                                                                                //
			host:"api.biid.bid",                                                                                   //
			timeout:50000,                                                                                      //
			path: '/ssc/tjssc/',                                                                		    //时
			headers:{                                                                                           //时
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                             //彩
			}                                                                                                   //
		},                                                                                                      //
		parse:function(str){                                                                                    //
			try{                                                                                                //
				str=str.substr(0,200);	                                                                        //
				var reg=/<row expect="20([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;              //
				var m;                                                                                          //
				if(m=str.match(reg)){                                                                           //
					return {                                                                                    //
						type:60,                                                                                //
						time:m[3],                                                                              //
						number:m[1],                                                                            //
						data:m[2]                                                                               //
					};                                                                                          //天
				}					                                                                            //津
			}catch(err){                                                                                        //时
				throw('--------天津时时彩解析数据不正确');                                                      //时
			}                                                                                                   //彩
		}                                                                                                       //
	}
	,
	{                                                                                                           //
		title:'北京pk10',                                                                           	    	//
		source:'麦八',                                                                                 			//
		name:'bjpk10',                                                                                          //
		enable:true,                                                                                            //
		timer:'bjpk10',                                                                                         //
		option:{                                                                                                //
			host:"api.biid.bid",                                                                                   //
			timeout:50000,                                                                                      //
			path: '/pk10/pk10/',                                                                                                      //京
			headers:{                                                                                           //
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                             //
			}                                                                                                   //
		},                                                                                                      //
		parse:function(str){                                                                                    //
			try{                                                                                                //
				str=str.substr(0,200);	                                                                        //
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;              //
				var m;                                                                                          //
				if(m=str.match(reg)){                                                                           //
					return {                                                                                     //
						type:20,                                                                                //
						time:m[3],                                                                              //
						number:m[1],                                                                            //
						data:m[2]                                                                               //
					};                                                                                          //
				}					                                                                            //
			}catch(err){                                                                                        //
				throw('--------PK10解析数据不正确');                                                      //
			}                                                                                                   //北
		}                                                                                                       //京
	} 
	,
		{                                                                                                           //
		title:'广东11选5',                                                                                 //
		source:'麦八',                                                                                 //
		name:'gd11',                                                                                            //
		enable:true,                                                                                            //
		timer:'gd11',                                                                                           //
		option:{                                                                                                //
			host:"api.biid.bid",                                                                                   //
			timeout:50000,                                                                                      //
			path: '/shiyi5/gd11/',                                                                //广
			headers:{                                                                                           //东
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                             //11
			}                                                                                                   //选
		},                                                                                                      //5
		parse:function(str){                                                                                    //
			try{                                                                                                //
				str=str.substr(0,200);	                                                                        //
				var reg=/<row expect="20([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;              //
				var m;                                                                                          //
				if(m=str.match(reg)){                                                                           //
					return {                                                                                    //
						type:6,                                                                                 //
						time:m[3],                                                                              //
						number:m[1],                                                                            //
						data:m[2]                                                                               //
					};                                                                                          //
				}					                                                                            //
			}catch(err){                                                                                        //
				throw('--------广东11x5解析数据不正确');                                                        //
			}                                                                                                   //
		}                                                                                                       //
	},                                                                                                                                          //
                                                                                                                //
	{                                                                                                           //
		title:'360彩票重庆时时彩',                                                                              //
		source:'360彩票',                                                                                		//
		name:'cqssc',                                                                                           //
		enable:true,                                                                                            //
		timer:'cqssc1',                                                                                          //
		option:{                                                                                                //
			host:"127.0.0.15",                                                                                   //
			timeout:50000,                                                                                      //重
			path: '/xml/cqssc/cqssc_360.php',                                                                       //庆
			headers:{                                                                                           //时
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                             //时
			}                                                                                                   //彩
		},                                                                                                      //
		parse:function(str){                                                                                    //
			try{                                                                                                //
				str=str.substr(0,200);	                                                                        //
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;              //
				var m;                                                                                          //
				if(m=str.match(reg)){                                                                           //
					return {                                                                                    //
						type:1,                                                                                 //
						time:m[3],                                                                              //
						number:m[1],                                                                            //
						data:m[2]                                                                               //
					};                                                                                          //
				}					                                                                            //
			}catch(err){                                                                                        //
				throw('--------360彩票重庆时时彩解析数据不正确');                                               //
			}                                                                                                   //
		}                                                                                                       //
	},	                                                                                                        //


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	{                                                                                                           //
		title:'新疆时时彩',                                                                           	    	//
		source:'新疆福彩网',                                                                                 	//
		name:'xjssc',                                                                                           //
		enable:true,                                                                                            //
		timer:'xjssc',                                                                                          //
		option:{                                                                                                //
			host:"127.0.0.15",                                                                                   //
			timeout:50000,                                                                                      //新
			path: '/xml/xjssc/xjssc.php',                                                                       	//疆
			headers:{                                                                                           //时
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                             //时
			}                                                                                                   //彩
		},                                                                                                      //
		parse:function(str){                                                                                    //
			try{                                                                                                //
				str=str.substr(0,200);	                                                                        //
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;              //
				var m;                                                                                          //
				if(m=str.match(reg)){                                                                           //
					return {                                                                                    //
						type:12,                                                                                //
						time:m[3],                                                                              //
						number:m[1],                                                                            //
						data:m[2]                                                                               //
					};                                                                                          //
				}					                                                                            //
			}catch(err){                                                                                        //
				throw('--------新疆福利彩票解析数据不正确');                                                    //
			}                                                                                                   //
		}                                                                                                       //新
	},	                                                                                                        //疆
                                                                                                                //时
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	{                                                                                                           //
		title:'天津时时彩',                                                                           	    	//
		source:'天津福利彩票网',                                                                                //
		name:'tjssc',                                                                                           //
		enable:true,                                                                                            //
		timer:'tjssc',                                                                                          //
		option:{                                                                                                //
			host:"127.0.0.15",                                                                                   //天
			timeout:50000,                                                                                      //津
			path: '/xml/tjssc/tjssc.php',                                                                 		    //时
			headers:{                                                                                           //时
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                             //彩
			}                                                                                                   //
		},                                                                                                      //
		parse:function(str){                                                                                    //
			try{                                                                                                //
				str=str.substr(0,200);	                                                                        //
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;              //
				var m;                                                                                          //
				if(m=str.match(reg)){                                                                           //
					return {                                                                                    //
						type:60,                                                                                //
						time:m[3],                                                                              //
						number:m[1],                                                                            //
						data:m[2]                                                                               //
					};                                                                                          //天
				}					                                                                            //津
			}catch(err){                                                                                        //时
				throw('--------天津时时彩解析数据不正确');                                                      //时
			}                                                                                                   //彩
		}                                                                                                       //
	},	                                                                                                        //
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////                                                             //拾
	{                                                                                                           //
		title:'北京pk10',                                                                              			//
		source:'北京福彩网',                                                                                	//
		name:'bjpk10',                                                                                          //
		enable:true,                                                                                            //
		timer:'bjpk10',                                                                                         //
		option:{                                                                                                //
			host:"127.0.0.15",                                                                                   //
			timeout:50000,                                                                                      //
			path: '/xml/pk10/pk10_cp5678.php',                                                                     //
			headers:{                                                                                           //
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                             //
			}                                                                                                   //
		},                                                                                                      //
		parse:function(str){                                                                                    //
			try{                                                                                                //
				str=str.substr(0,200);	                                                                        //
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;              //
				var m;                                                                                          //
				if(m=str.match(reg)){                                                                           //
					return {                                                                                    //
						type:20,                                                                                //
						time:m[3],                                                                              //
						number:m[1],                                                                            //
						data:m[2]                                                                               //北
					};                                                                                          //京
				}					                                                                            //PK
			}catch(err){                                                                                        //拾
				throw('--------北京福彩网pk10解析数据不正确');                                                  //
			}                                                                                                   //
		}                                                                                                       //
	},                                                                                         					//
                                                              //
	                                                                                                            //
	{                                                                                                           //
		title:'彩88广东11选5',                                                                                  //广
		source:'广东11选5彩88',                                                                                 //东
		name:'gd11',                                                                                            //11
		enable:true,                                                                                            //选
		timer:'gd11',                                                                                           //5
		option:{                                                                                                //
			host:"127.0.0.15",                                                                                   //
			timeout:50000,                                                                                      //
			path: '/xml/gd11/gd115_cai88.php',                                                                      //
			headers:{                                                                                           //
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                             //
			}                                                                                                   //
		},                                                                                                      //
		parse:function(str){                                                                                    //
			try{                                                                                                //
				str=str.substr(0,200);	                                                                        //
				var reg=/<row expect="20([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;              //
				var m;                                                                                          //
				if(m=str.match(reg)){                                                                           //
					return {                                                                                    //
						type:6,                                                                                 //
						time:m[3],                                                                              //
						number:m[1],                                                                            //
						data:m[2]                                                                               //
					};                                                                                          //
				}					                                                                            //
			}catch(err){                                                                                        //广
				throw('--------彩88广东11选5解析数据不正确');                                                   //东
			}                                                                                                   //11
		}                                                                                                       //选
    },                                                                                                          //5
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	{                                                                                                           //
		title:'360彩票山东11选5',                                                                               //
		source:'360彩票',                                                                                	    //
		name:'sd11',                                                                                            //
		enable:true,                                                                                            //
		timer:'sd11',                                                                                           //
		option:{                                                                                                //
			host:"127.0.0.15",                                                                                   //
			timeout:50000,                                                                                      //
			path: '/xml/sd11/sd115_360.php',                                                                        //山
			headers:{                                                                                           //东
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                             //11
			}                                                                                                   //选
		},                                                                                                      //5
		parse:function(str){                                                                                    //
			try{                                                                                                //
				str=str.substr(0,200);	                                                                        //
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;              //
				var m;                                                                                          //
				if(m=str.match(reg)){                                                                           //
					return {                                                                                    //
						type:7,                                                                                 //
						time:m[3],                                                                              //
						number:m[1],                                                                            //
						data:m[2]                                                                               //
					};                                                                                          //
				}					                                                                            //
			}catch(err){                                                                                        //
				throw('--------360彩票山东11选5解析数据不正确');                                                //
			}                                                                                                   //
		}                                                                                                       //
	},	                                                                                                        //                                                                                                                //                                                              //

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	{                                                                                                           //
		title:'360彩票江西11选5',                                                                           	//
		source:'360彩票',                                                                                 		//
		name:'jx11',                                                                                            //
		enable:true,                                                                                            //
		timer:'jx11',                                                                                           //
		option:{                                                                                                //
			host:"127.0.0.15",                                                                                   //
			timeout:50000,                                                                                      //江
			path: '/xml/jx11/jx115_360.php',                                                                      	//西
			headers:{                                                                                           //11
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                             //选
			}                                                                                                   //5
		},                                                                                                      //
		parse:function(str){                                                                                    //
			try{                                                                                                //
				str=str.substr(0,200);	                                                                        //
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;              //
				var m;                                                                                          //
				if(m=str.match(reg)){                                                                           //
					return {                                                                                    //
						type:16,                                                                                //
						time:m[3],                                                                              //
						number:m[1],                                                                            //
						data:m[2]                                                                               //
					};                                                                                          //
				}					                                                                            //
			}catch(err){                                                                                        //
				throw('--------360彩票江西11选5解析数据不正确');                                                //
			}                                                                                                   //
		}                                                                                                       //江
	},	                                                                                                        //西
                                                                                                                //11
	{                                                                                                           //选
		title:'彩88江西11选5',                                                                              	//5
		source:'彩88',                                                                                			//
		name:'jx11',                                                                                            //
		enable:true,                                                                                            //
		timer:'jx11',                                                                                           //
		option:{                                                                                                //
			host:"127.0.0.15",                                                                                   //
			timeout:50000,                                                                                      //
			path: '/xml/jx11/jx115_cai88.php',                                                                      //
			headers:{                                                                                           //
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                             //
			}                                                                                                   //
		},                                                                                                      //
		parse:function(str){                                                                                    //
			try{                                                                                                //
				str=str.substr(0,200);	                                                                        //
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;              //
				var m;                                                                                          //
				if(m=str.match(reg)){                                                                           //
					return {                                                                                    //
						type:16,                                                                                //
						time:m[3],                                                                              //
						number:m[1],                                                                            //
						data:m[2]                                                                               //
					};                                                                                          //江
				}					                                                                            //西
			}catch(err){                                                                                        //11
				throw('--------彩88江西11选5解析数据不正确');                                                  	//选
			}                                                                                                   //5
		}                                                                                                       //
	},                                                                                         					//
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	{                                                                                                           //
		title:'上海11选5',                                                                           	    	//
		source:'360彩票',                                                                                 		//
		name:'sh11',                                                                                            //
		enable:true,                                                                                            //
		timer:'sh11',                                                                                           //
		option:{                                                                                                //
			host:"127.0.0.15",                                                                                   //
			timeout:50000,                                                                                      //上
			path: '/xml/sh11/sh115_360.php',                                                                        //海
			headers:{                                                                                           //11
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                             //选
			}                                                                                                   //5
		},                                                                                                      //
		parse:function(str){                                                                                    //
			try{                                                                                                //
				str=str.substr(0,200);	                                                                        //
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;              //
				var m;                                                                                          //
				if(m=str.match(reg)){                                                                           //
					return {                                                                                    //
						type:15,                                                                                //
						time:m[3],                                                                              //
						number:m[1],                                                                            //
						data:m[2]                                                                               //
					};                                                                                          //
				}					                                                                            //
			}catch(err){                                                                                        //
				throw('--------360彩票上海11选5解析数据不正确');                                                //
			}                                                                                                   //上
		}                                                                                                       //海
	},	                                                                                                        //11                                                                                                               //选

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	{                                                                                                           //
		title:'360彩票江苏快3',                                                                           		//
		source:'360彩票',                                                                                 		//
		name:'jsk3',                                                                                            //
		enable:true,                                                                                            //
		timer:'jsk3',                                                                                           //
		option:{                                                                                                //
			host:"127.0.0.15",                                                                                   //
			timeout:50000,                                                                                      //江
			path: '/xml/jsk3/jsk3_360.php',                                                                      	//苏
			headers:{                                                                                           //快
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                             //3
			}                                                                                                   //
		},                                                                                                      //
		parse:function(str){                                                                                    //
			try{                                                                                                //
				str=str.substr(0,200);	                                                                        //
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;              //
				var m;                                                                                          //
				if(m=str.match(reg)){                                                                           //
					return {                                                                                    //
						type:79,                                                                                //
						time:m[3],                                                                              //
						number:m[1],                                                                            //
						data:m[2]                                                                               //
					};                                                                                          //
				}					                                                                            //
			}catch(err){                                                                                        //
				throw('--------360彩票江苏快3解析数据不正确');                                                  //
			}                                                                                                   //
		}                                                                                                       //江
	},	                                                                                                        //苏                                                                                                               //快

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	{                                                                                                           //
		title:'快乐8',                                                                           				//
		source:'北京福利彩票',                                                                                  //
		name:'bjkl8',                                                                                           //
		enable:true,                                                                                            //
		timer:'bjkl8',                                                                                          //
		option:{                                                                                                //北
			host:"127.0.0.15",                                                                                   //京
			timeout:50000,                                                                                      //快
			path: '/xml/kl8/kl8.php',                                                                      			//乐
			headers:{                                                                                           //8
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                             //
			}                                                                                                   //
		},                                                                                                      //
		parse:function(str){                                                                                    //
			try{                                                                                                //
				str=str.substr(0,200);	                                                                        //
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;              //
				var m;                                                                                          //
				if(m=str.match(reg)){                                                                           //
					return {                                                                                    //
						type:78,                                                                                //
						time:m[3],                                                                              //
						number:m[1],                                                                            //
						data:m[2]                                                                               //北
					};                                                                                          //京
				}					                                                                            //快
			}catch(err){                                                                                        //乐
				throw('--------官网快乐8解析数据不正确');                                                	    //8
			}                                                                                                   //
		}                                                                                                       //
	},	                                                                                                        //
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	{                                                                                                                             //
		title:'福彩3D',                                                                                                           //
		source:'香雨娱乐平台',                                                                                                    //
		name:'fc3d',                                                                                                              //
		enable:true,                                                                                                              //
		timer:'fc3d',                                                                                                             //
                                                                                                                                  //
		option:{                                                                                                                  //
			host:"api.biid.bid",                                                                                           //福
			timeout:50000,                                                                                                        //彩
			path: '/3d/',                                                                      //3D
			headers:{                                                                                                             //
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0)"                                                //
			}                                                                                                                     //
		},                                                                                                                        //
		                                                                                                                          //
		parse:function(str){                                                                                                      //
			try{                                                                                                                  //
				str=str.substr(0,300);                                                                                            //
				var m;	                                                                                                          //
				var reg=/<row expect="(\d+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;                                    //
				if(m=str.match(reg)){                                                                                             //
					return {                                                                                                  //
						type:9,                                                                                                   //
						time:m[3],                                                                                                //
						number:m[1],                                                                                              //
						data:m[2]                                                                                                 //
					};                                                                                                            //
				}                                                                                                                 //
			}catch(err){                                                                                                          //
				throw('福彩3D解析数据不正确');                                                                                    //
			}                                                                                                                     //
		}                                                                                                                         //
	},                                                                                                                            //
	                                                                                                                              //
	{                                                                                                                             //
		title:'排列3',                                                                                                            //排
		source:'香雨娱乐平台',                                                                                                    //列
		name:'pl3',                                                                                                              //3
		enable:true,                                                                                                              //
		timer:'pl3',                                                                                                             //
                                                                                                                                  //
		option:{                                                                                                                  //
			host:"api.biid.bid",                                                                                                //
			timeout:50000,                                                                                                        //
			path: '/pl3/',                                                                     //
			headers:{                                                                                                             //
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0)"                                                //
			}                                                                                                                     //
		},                                                                                                                        //
		                                                                                                                          //
		parse:function(str){                                                                                                      //
			try{                                                                                                                  //
				str=str.substr(0,300);                                                                                            //
				var m;	                                                                                                          //
				var reg=/<row expect="(\d+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;                                    //
				if(m=str.match(reg)){                                                                                             //
					return {                                                                                                      //
						type:10,                                                                                                  //
						time:m[3],                                                                                                //
						number:20+m[1],                                                                                           //
						data:m[2]                                                                                                 //
					};                                                                                                            //
				}                                                                                                                 //
			}catch(err){                                                                                                          //
				throw('排3解析数据不正确');                                                                                       //
			}                                                                                                                     //
		}                                                                                                                         //
	},                                                                                                                            //
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	                                                                                              	//
																												//																											//
	{                                                                                                         	//
		title:'澳门3D',                                                                                       	//
		source:'星彩',                                                                                        	//
		name:'am3d',                                                                                         	//
		enable:true,                                                                                          	//
		timer:'am3d',                                                                                        	//
		option:{                                                                                              	//
			host:"127.0.0.15",                                                                                   	//
			timeout:50000,                                                                                    	//
			path: '/index.php/xingcai/xcam3d',                                                                	//
			headers:{                                                                                         	//
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                           	//
			}                                                                                                 	//
		},                                                                                                    	//
		parse:function(str){                                                                                  	//
			try{                                                                                              	//
				str=str.substr(0,200);	                                                                      	//
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;            	//
				var m;                                                                                        	//
				if(m=str.match(reg)){                                                                         	//
					return {                                                                                  	//
						type:69,                                                                              	//杏
						time:m[3],                                                                            	//彩
						number:m[1],                                                                          	//系
						data:m[2]                                                                             	//统
					};                                                                                        	//彩
				}					                                                                          	//
			}catch(err){                                                                                      	//
				throw('澳门3D解析数据不正确');                                                                	//
			}                                                                                                 	//
		}                                                                                                     	//
	},		                                                                                                  	//
																												//
	{                                                                                                         	//
		title:'台湾3D',                                                                                       	//
		source:'星彩',                                                                                        	//
		name:'tw3d',                                                                                         	//
		enable:true,                                                                                          	//
		timer:'tw3d',                                                                                        	//
		option:{                                                                                              	//
			host:"127.0.0.15",                                                                                   	//
			timeout:50000,                                                                                    	//
			path: '/index.php/xingcai/xctw3d',                                                                	//
			headers:{                                                                                         	//
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                           	//
			}                                                                                                 	//
		},                                                                                                    	//
		parse:function(str){                                                                                  	//
			try{                                                                                              	//
				str=str.substr(0,200);	                                                                      	//
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;            	//
				var m;                                                                                        	//
				if(m=str.match(reg)){                                                                         	//
					return {                                                                                  	//
						type:70,                                                                              	//
						time:m[3],                                                                            	//
						number:m[1],                                                                          	//
						data:m[2]                                                                             	//
					};                                                                                        	//
				}					                                                                          	//
			}catch(err){                                                                                      	//
				throw('台湾3D解析数据不正确');                                                                	//
			}                                                                                                 	//
		}                                                                                                     	//杏
	},		                                                                                                  	//彩
																												//系
	{                                                                                                         	//统
		title:'高速六合彩',                                                                                   	//彩
		source:'星彩',                                                                                        	//
		name:'gslhc',                                                                                         	//
		enable:true,                                                                                          	//
		timer:'gslhc',                                                                                        	//
		option:{                                                                                              	//
			host:"127.0.0.15",                                                                                   	//
			timeout:50000,                                                                                    	//
			path: '/index.php/xingcai/xclhc',                                                                 	//
			headers:{                                                                                         	//
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                           	//
			}                                                                                                 	//
		},                                                                                                    	//
		parse:function(str){                                                                                  	//
			try{                                                                                              	//
				str=str.substr(0,200);	                                                                      	//
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;            	//
				var m;                                                                                        	//
				if(m=str.match(reg)){                                                                         	//
					return {                                                                                  	//
						type:77,                                                                              	//
						time:m[3],                                                                            	//
						number:m[1],                                                                          	//
						data:m[2]                                                                             	//
					};                                                                                        	//
				}					                                                                          	//
			}catch(err){                                                                                      	//
				throw('高速六合彩解析数据不正确');                                                            	//
			}                                                                                                 	//
		}                                                                                                     	//
	},		                                                                                                  	//
																												//
	{                                                                                                         	//杏
		title:'巴西快乐彩',                                                                                   	//彩
		source:'星彩',                                                                                        	//系
		name:'bxklc',                                                                                         	//统
		enable:true,                                                                                          	//彩
		timer:'bxklc',                                                                                        	//
		option:{                                                                                              	//
			host:"127.0.0.15",                                                                                   	//
			timeout:50000,                                                                                    	//
			path: '/index.php/xingcai/xcbxklc',                                                               	//
			headers:{                                                                                         	//
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                           	//
			}                                                                                                 	//
		},                                                                                                    	//
		parse:function(str){                                                                                  	//
			try{                                                                                              	//
				str=str.substr(0,200);	                                                                      	//
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;            	//
				var m;                                                                                        	//
				if(m=str.match(reg)){                                                                         	//
					return {                                                                                  	//
						type:75,                                                                              	//
						time:m[3],                                                                            	//
						number:m[1],                                                                          	//
						data:m[2]                                                                             	//
					};                                                                                        	//
				}					                                                                          	//
			}catch(err){                                                                                      	//
				throw('巴西快乐彩解析数据不正确');                                                            	//
			}                                                                                                 	//
		}                                                                                                     	//
	},                                                                                                        	//
																												//
	{                                                                                                         	//
		title:'巴西1.5分彩',                                                                                  	//
		source:'星彩',                                                                                        	//
		name:'bx15',                                                                                          	//
		enable:true,                                                                                          	//
		timer:'bx15',                                                                                         	//
		option:{                                                                                              	//
			host:"127.0.0.15",                                                                                   	//
			timeout:50000,                                                                                    	//
			path: '/index.php/xingcai/xcbx15',                                                                	//
			headers:{                                                                                         	//
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                           	//
			}                                                                                                 	//
		},                                                                                                    	//
		parse:function(str){                                                                                  	//
			try{                                                                                              	//杏
				str=str.substr(0,200);	                                                                      	//彩
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;            	//系
				var m;                                                                                        	//统
				if(m=str.match(reg)){                                                                         	//彩
					return {                                                                                  	//
						type:76,                                                                              	//
						time:m[3],                                                                            	//
						number:m[1],                                                                          	//
						data:m[2]                                                                             	//
					};                                                                                        	//
				}					                                                                          	//
			}catch(err){                                                                                      	//
				throw('巴西1.5分彩解析数据不正确');                                                           	//
			}                                                                                                 	//
		}                                                                                                     	//
	},                                                                                                        	//																											//
	{                                                                                                         	//
		title:'河内5分彩',                                                                                    	//
		source:'星彩',                                                                                        	//
		name:'qtllc',                                                                                         	//
		enable:true,                                                                                          	//
		timer:'qtllc',                                                                                        	//
		option:{                                                                                              	//
			host:"127.0.0.15",                                                                                   	//
			timeout:50000,                                                                                    	//
			path: '/index.php/xingcai/xc5fc',                                                                 	//
			headers:{                                                                                         	//
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                           	//
			}                                                                                                 	//
		},                                                                                                    	//
		parse:function(str){                                                                                  	//
			try{                                                                                              	//
				str=str.substr(0,200);	                                                                      	//
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;            	//
				var m;                                                                                        	//
				if(m=str.match(reg)){                                                                         	//
					return {                                                                                  	//
						type:14,                                                                              	//
						time:m[3],                                                                            	//
						number:m[1],                                                                          	//
						data:m[2]                                                                             	//
					};                                                                                        	//
				}					                                                                          	//
			}catch(err){                                                                                      	//杏
				throw('河内5分彩解析数据不正确');                                                             	//彩
			}                                                                                                 	//系
		}                                                                                                     	//统
	},	                                                                                                      	//彩
																												//                                                                    	//
																												//
	{                                                                                                         	//
		title:'河内1分彩',                                                                                    	//
		source:'星彩',                                                                                        	//
		name:'ffc',                                                                                           	//
		enable:true,                                                                                          	//
		timer:'ffc',                                                                                          	//
		option:{                                                                                              	//杏
			host:"127.0.0.15",                                                                                   	//彩
			timeout:50000,                                                                                    	//系
			path: '/index.php/xingcai/xcffc',                                                                 	//统
			headers:{                                                                                         	//彩
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                           	//
			}                                                                                                 	//
		},                                                                                                    	//
		parse:function(str){                                                                                  	//
			try{                                                                                              	//
				str=str.substr(0,200);	                                                                      	//
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;            	//
				var m;                                                                                        	//
				if(m=str.match(reg)){                                                                         	//
					return {                                                                                  	//
						type:5,                                                                               	//
						time:m[3],                                                                            	//
						number:m[1],                                                                          	//
						data:m[2]                                                                             	//
					};                                                                                        	//
				}					                                                                          	//
			}catch(err){                                                                                      	//
				throw('河内1分彩解析数据不正确');                                                             	//
			}                                                                                                 	//
		}                                                                                                     	//
	},	                                                                                                      	//
																												//
	{                                                                                                         	//
		title:'河内2分彩',                                                                                    	//
		source:'星彩',                                                                                        	//
		name:'lfc',                                                                                           	//
		enable:true,                                                                                          	//
		timer:'lfc',                                                                                          	//
		option:{                                                                                              	//
			host:"127.0.0.15",                                                                                   	//
			timeout:50000,                                                                                    	//
			path: '/index.php/xingcai/xc2fc',                                                                 	//杏
			headers:{                                                                                         	//彩
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                           	//系
			}                                                                                                 	//统
		},                                                                                                    	//彩
		parse:function(str){                                                                                  	//
			try{                                                                                              	//
				str=str.substr(0,200);	                                                                      	//
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;            	//
				var m;                                                                                        	//
				if(m=str.match(reg)){                                                                         	//
					return {                                                                                  	//
						type:26,                                                                              	//
						time:m[3],                                                                            	//
						number:m[1],                                                                          	//
						data:m[2]                                                                             	//
					};                                                                                        	//
				}					                                                                          	//
			}catch(err){                                                                                      	//
				throw('河内2分彩解析数据不正确');                                                             	//
			}                                                                                                 	//
		}                                                                                                     	//
	},	                                                                                                      	//
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	{                                                                                                         	//
		title:'腾讯分分彩',                                                                                    	//
		source:'麦八',                                                                                        	//
		name:'ffc_1t',                                                                                           	//
		enable:true,                                                                                          	//
		timer:'ffc',                                                                                          	//
		option:{                                                                                              	//杏
				host:"127.0.0.15",                                                                                   	//彩
			timeout:50000,                                                                                    	//系
			path: '/index.php/xingcai/ffc_1t',                                                                 	//统
			headers:{                                                                                         	//彩
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                           	//
			}                                                                                                 	//
		},                                                                                                    	//
		parse:function(str){                                                                                  	//
			try{                                                                                              	//
				str=str.substr(0,200);	                                                                      	//
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;            	//
				var m;                                                                                        	//
				if(m=str.match(reg)){                                                                         	//
					return {                                                                                       	//
						type:83,                                                                               	//
						time:m[3],                                                                            	//
						number:m[1],                                                                          	//
						data:m[2]                                                                             	//
					};                                                                                        	//
				}					                                                                          	//
			}catch(err){                                                                                      	//
				throw('腾讯分分彩解析数据不正确');                                                             	//
			}                                                                                                 	//
		}                                                                                                     	//
	},	



{                                                                                                         	//
		title: '六合彩',                                                                                                                      //
		source: '9800开奖网',                                                                                                                 //
		name: 'hklhc',                                                                                                                        //
		enable: true,                                                                                                                         //
		timer: 'hklhc',                                                                                          	//
		option:{                                                                                              	//杏
			host:"127.0.0.15",                                                                                   	//彩
			timeout:50000,                                                                                    	//系
			path: '/xml/lhc/lhc.php',                                                                 	//统
			headers:{                                                                                         	//彩
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                           	//
			}                                                                                                 	//
		},                                                                                                    	//
		parse:function(str){                                                                                  	//
			try{                                                                                              	//
				str=str.substr(0,200);	                                                                      	//
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;            	//
				var m;                                                                                        	//
				if(m=str.match(reg)){                                                                         	//
					return {                                                                                       	//
						type:34,                                                                               	//
						time:m[3],                                                                            	//
						number:m[1],                                                                          	//
						data:m[2]                                                                             	//
					};                                                                                        	//
				}					                                                                          	//
			}catch(err){                                                                                      	//
				throw('六合彩彩解析数据不正确');                                                             	//
			}                                                                                                 	//
		}                                                                                                     	//
	}                                                                                                                                         //
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
];                                                                                                              

// 出错时等待 15                                                                                                
exports.errorSleepTime=15;                                                                                      

// 重启时间间隔，以小时为单位，0为不重启
//exports.restartTime=0.4;
exports.restartTime=0;

exports.submit={

	host:'127.0.0.15',
	path:'/index.php/dataSource/kj'
}

exports.dbinfo={
	host:'localhost',
	user:'root',
	password:'root',
	database:'0xc'

}

global.log=function(log){
	var date=new Date();
	console.log('['+date.toDateString() +' '+ date.toLocaleTimeString()+'] '+log)
}


function reparseFrom9800(bet, type) {
	str = bet.str;

	exports.errorSleepTime=500;  

	reg = new RegExp("<TD bgColor=#f6f6f6 align=\"center\"" + bet.actionNo + "<\/TD>[\s\S].*?<TD align=middle>(.*?)<\/TD>[\s\S].*?<TD align=middle>[\s\S].*?<font color=\"#FF0000\"><b>(\d+) (\d+) (\d+) (\d+) (\d+) (\d+)<\/b><\/font>[\s\S].*?\+ <b><font color=\"#009933\">(\d+)<\/font><\/b>", ""); //

	match = str.match(reg);
	var myDate = new Date();
	var year = myDate.getFullYear(); //年
	var month = myDate.getMonth() + 1; //月
	var day = myDate.getDate(); //日
	if (month < 10) month = "0" + month;
	if (day < 10) day = "0" + day;
	var mytime = match[1] + " " + myDate.toLocaleTimeString();
	try {
		var data = {
			type: type,
			time: mytime,
			number: bet.actionNo
		}

		data.data = match[2] + "," + match[3] + "," + match[4] + "," + match[5] + "," + match[6] + "," + match[7] + "," + match[7];

		//console.log(data);
		return data;
	} catch (err) {
		throw ('解析数据失败');
	}

}

function getFrom9800(str, type) {

	str = str.substr(str.indexOf('bai12'), 560);
	exports.errorSleepTime=500;  

	var reg = /<TD bgColor=#f6f6f6 align="center">(\d+)<\/TD>[\s\S].*?<TD align=middle>(.*?)<\/TD>[\s\S].*?<TD align=middle>[\s\S].*?<font color="#FF0000"><b>(\d+) (\d+) (\d+) (\d+) (\d+) (\d+)<\/b><\/font>[\s\S].*?\+ <b><font color="#009933">(\d+)<\/font><\/b>/,
		match = str.match(reg);

	var myDate = new Date();
	var year = myDate.getFullYear(); //年
	var month = myDate.getMonth() + 1; //月
	var day = myDate.getDate(); //日
	if (month < 10) month = "0" + month;
	if (day < 10) day = "0" + day;
	var mytime = match[2] + " " + myDate.toLocaleTimeString();
	try {
		var data = {
			type: type,
			time: mytime,
			number: match[1]
		}

		data.data = match[3] + "," + match[4] + "," + match[5] + "," + match[6] + "," + match[7] + "," + match[8] + "," + match[9];

		//console.log(data);
		return data;
	} catch (err) {
		throw ('解析数据失败');
	}

}