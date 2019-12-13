<template>
<div>
  <div >
    <div class="hwader" style="position:relative">
      <ul class="hd-nav">
        <!-- <li class="search-box-li">
              <div><input type="text" name="search-keyword" placeholder="输入关键词" form="search-keyword"><i
                      class="iconfont search-submit">&#xe617;</i></div>
              <i class="search-exit"></i></li> -->
          <li><a href="#" >网站首页<span></span></a></li>
          <li><a href="#" >关于我们<span></span></a></li>
          <li><a href="#" >菜式欣赏<span></span></a></li>
          <li><a href="#" >美食资讯<span></span></a></li>
          <li><a href="#" >在线预订<span></span></a></li>
      </ul>
    </div>
      <div class="block">
        <el-carousel :height="imgHeight">
          <el-carousel-item v-for="item in images" :key="item">
            <img ref="imgHeight" class="carousel_banner" width="100%" :src="item">
          </el-carousel-item>
        </el-carousel>
      </div>
  </div>
  <div class="provide_service_box">
    <div class="provide_service2">
      <span>我们提供</span>
    </div>
    <div class="provide_service">
      <el-row>
        <el-col :span="8">
          <div class="provide_services">
            <span><img src="../assets/index/images/lunch.png" alt=""></span>
            <h2>中餐</h2>
            <p>公司目前经营的范围包括：电子商务平台开发技术支持、技术转让、运维技术服务大数据、云计算等。</p>
          </div>
        </el-col>
        <el-col :span="8">
          <div class="provide_services">
            <span><img src="../assets/index/images/dinner.png" alt=""></span>
            <h2>晚餐</h2>
            <p>公司目前经营的范围包括：电子商务平台开发技术支持、技术转让、运维技术服务大数据、云计算等。</p>
          </div>
        </el-col>
        <el-col :span="8">
          <div class="provide_services">
            <span><img src="../assets/index/images/coffee.png" alt=""></span>
            <h2>甜品/咖啡</h2>
            <p>公司目前经营的范围包括：电子商务平台开发技术支持、技术转让、运维技术服务大数据、云计算等。</p>
          </div>
        </el-col>
      </el-row>
    </div>
  </div>
  <div class="aesthetic_map_box">
      <div class="provide_service2">
        <span>菜式欣赏</span>
      </div>
      <div style="width:1200px;border-top:1px solid #ddd;margin:0 auto;"> &nbsp;</div>
      <div style="font-size: 0;">
        <el-row>
          <el-col :span="24"><div><img width="100%" class="mdbanner" src="../assets/index/images/mdbanner.jpg"></div></el-col>
        </el-row>
      </div>
      <div>
        <el-row>
          <el-col :span="10"><div style="margin-top:49%;"><span>每一种食物来源都经过我们的精挑细选，关于食材我们只选最天然、健康、优质的，只为一份对极致美味的追求，用心做好每一份菜，是我们不变的宗旨。</span></div></el-col>
          <el-col :span="14">
            <div>
              <ul class="aesthetic_map_ul">
                <li><img src="../assets/index/images/mdlist1.jpg"></li>
                <li><img src="../assets/index/images/mdlist2.jpg"></li>
                <li><img src="../assets/index/images/mdlist3.jpg"></li>
                <li><img src="../assets/index/images/mdlist4.jpg"></li>
                <li><img src="../assets/index/images/mdlist5.jpg"></li>
                <li><img src="../assets/index/images/mdlist6.jpg"></li>
                <li><img src="../assets/index/images/mdlist7.jpg"></li>
                <li><img src="../assets/index/images/mdlist8.jpg"></li>
                <li><img src="../assets/index/images/mdlist9.jpg"></li>
                <li class="clear"></li>
              </ul>
            </div>
          </el-col>
        </el-row>
      </div>
    </div>
    <div class="submenu">
      <div class="menu">
        <el-row>
          <el-col :span="6"><a href="#">午餐</a></el-col>
          <el-col :span="6"><a href="#">晚餐</a></el-col>
          <el-col :span="6"><a href="#">甜品</a></el-col>
          <el-col :span="6"><a href="#">饮料</a></el-col>
        </el-row>
      </div>
      <div class="menu_img">
        <el-row>
          <el-col :span="8"><a href="#"><img src="../assets/index/images/foodlist1.jpg"></a></el-col>
          <el-col class="margin_lr" :span="8"><a href="#"><img src="../assets/index/images/foodlist2.jpg"></a></el-col>
          <el-col :span="8"><a href="#"><img src="../assets/index/images/foodlist3.jpg"></a></el-col>
        </el-row>
        <div style="margin-bottom:30px;"></div>
        <el-row >
          <el-col :span="8"><a href="#"><img src="../assets/index/images/foodlist4.jpg"></a></el-col>
          <el-col class="margin_lr" :span="8"><a href="#"><img src="../assets/index/images/foodlist5.jpg"></a></el-col>
          <el-col :span="8"><a href="#"><img src="../assets/index/images/foodlist6.jpg"></a></el-col>
        </el-row>
        <div style="margin-bottom:20px;"></div>
        <el-row>
          <el-col :span="24"><a class="more" href="#">MORE</a></el-col>
        </el-row>
      </div>
    </div>
    <div class="consultation">
      <div class="provide_service2">
        <span>美食资讯</span>
      </div>
      <div style="width:1200px;border-top:1px solid #ddd;margin:0 auto;"> &nbsp;</div>
      <div class="delicious_consultation">
        <el-row>
          <el-col style="position:relative" :span="8">
            <a href="#">
                <div class="activity-duration">
                    <img style="position:absolute;top:0px;left:38px; z-index:1;" src="../assets/index/images/activity-duration.png">
                    <p style="width:50px;position:absolute;top:2px;left:48px; z-index:2;color:white">6-1日</p>
                </div>
                <img src="../assets/index/images/foodnewlist1.jpg">
                <h1 class="food-head">周末轻松制作美味甜品</h1>
                <p class="food-info">每个周末都抽出一个小时的时间来为自己做一份甜品，让周末的休闲充满制作甜蜜和品尝甜蜜的快乐。</p>
            </a>
          </el-col>
          <el-col style="position:relative" :span="8">
            <a href="#">
                <div class="activity-duration">
                    <img style="position:absolute;top:0px;left:38px; z-index:1;" src="../assets/index/images/activity-duration.png">
                    <p style="width:50px;position:absolute;top:2px;left:48px; z-index:2;color:white">6-1日</p>
                </div>
                <img src="../assets/index/images/foodnewlist1.jpg">
                <h1 class="food-head">周末轻松制作美味甜品</h1>
                <p class="food-info">每个周末都抽出一个小时的时间来为自己做一份甜品，让周末的休闲充满制作甜蜜和品尝甜蜜的快乐。</p>
            </a>
          </el-col>
          <el-col style="position:relative" :span="8">
            <a href="#">
                <div class="activity-duration">
                    <img style="position:absolute;top:0px;left:38px; z-index:1;" src="../assets/index/images/activity-duration.png">
                    <p style="width:50px;position:absolute;top:2px;left:48px; z-index:2;color:white">6-1日</p>
                </div>
                <img src="../assets/index/images/foodnewlist1.jpg">
                <h1 class="food-head">周末轻松制作美味甜品</h1>
                <p class="food-info">每个周末都抽出一个小时的时间来为自己做一份甜品，让周末的休闲充满制作甜蜜和品尝甜蜜的快乐。</p>
            </a>
          </el-col>
        </el-row>
        <div style="margin-bottom:30px;"></div>
        <el-row>
          <el-col :span="24"><a class="more" href="#">MORE</a></el-col>
        </el-row>
      </div>
    </div>
    <div class="reserve">
      <div class="provide_service2">
        <span>在线预订</span>
      </div>
      <div style="width:1200px;border-top:1px solid #ddd;margin:0 auto;"> &nbsp;</div>
      <div class="reserve_background">
        <div style="width:1200px;margin:0px auto;">
          <el-row>
            <el-col style="text-align:center;" :span="8">
              <p>姓名</p>
              <el-input></el-input>
            </el-col>
            <el-col style="text-align:center;" :span="8">
              <p>电话号码</p>
              <el-input></el-input>
            </el-col>
            <el-col style="text-align:center;" :span="8">
              <p>电子邮件</p>
              <el-input></el-input>
            </el-col>
          </el-row>
          <el-row>
            <el-col style="text-align:center;" :span="8">
              <p>时间</p>
              <el-input></el-input>
            </el-col>
            <el-col style="text-align:center;" :span="8">
              <p>人数</p>
              <el-input></el-input>
            </el-col>
            <el-col style="text-align:center;" :span="8">
              <p>日期</p>
              <el-input></el-input>
            </el-col>
          </el-row>
          <el-row>
            <el-col style="text-align:center;" :span="24">
              <p>内容</p>
              <el-input
              type="textarea"
              :rows="8"
              v-model="textarea"
              ></el-input>
            </el-col>
          </el-row>
          <el-row>
            <el-col style="text-align:center" :span="24">
              <a href="#" class="reserve_botton">预定</a>
            </el-col>
          </el-row>
        </div>
      </div>
    </div>
    <div class="footers">
      <div class="footer-tops">
        <el-row>
          <el-col :span="4"><a href="#">网站首页</a></el-col>
          <el-col :span="4"><a href="#">关于我们</a></el-col>
          <el-col :span="4"><a href="#">菜式欣赏</a></el-col>
          <el-col :span="4"><a href="#">美食资讯</a></el-col>
          <el-col :span="4"><a href="#">美食排行</a></el-col>
          <el-col :span="4"><a href="#">在线预订</a></el-col>
        </el-row>
      </div>
      <div style="width:100%;border-top:1px solid #fff;margin:0 auto;margin-top:20px;"> &nbsp;</div>
      <div class="footer-body">
        <el-row>
          <el-col :span="8">
            <span>电话:</span><span>152****3761</span>
          </el-col>
          <el-col style="text-align:left;" :span="8">
            <span>邮箱:</span><span>20****4354@qq.com</span>
          </el-col>
          <el-col :span="8">
            <span>地址:</span><span>温州市瑞安市高楼镇</span>
          </el-col>
        </el-row>
      </div>
    </div>
</div>
</template>

<script>
export default {
  name: 'HelloWorld',
  data () {
    return {
      images:[
        require('../assets/index/images/banner.jpg'),
        require('../assets/index/images/banner2.jpg'),
        require('../assets/index/images/banner3.jpg')
      ],
      imgHeight:'880px',
    }
  },
  mounted(){
    let that = this;
    that.imgHeight = '880px'
    window.onresize = function temp() {
        // 通过点语法获取img的height属性值
    that.imgHeight = `${that.$refs.imgHeight['0'].height}px`
    console.log(that.imgHeight)
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
a{
  text-decoration:none;
}
.hwader{
  width:1200px;
  margin:0 auto;
}
li{
  text-align: -webkit-match-parent;
  list-style-type:none;
}
.hd-nav li{
  list-style-type:none;
  display: inline-block;
  padding: 2rem 1rem;
  
}
.hd-nav li a{
  color: white;
}
.hd-nav{
  position: absolute;
  z-index: 9999;
  margin: 0 auto;
  right: 0px;
}
.provide_service_box{
  width:100%;
  background-color:#FFF8EF;
  padding: 20px 0;
}
.provide_services{
  padding-top: 20px ;
  width:300px;
  text-align:center;
  margin: 0% auto;
}
.provide_service{
  width:1200px;
  margin:0 auto;
  border: 1px solid #ddd;
  border-left: 0px;
  border-right: 0px;
}
.provide_service2{
  text-align: center;
  margin:0 auto;
  width: 120px;
  border-bottom: 3px solid #E25111; 
}
.provide_service2 span{
  font-size: 30px;
}
.aesthetic_map_box{
  width:100%;
  background-color:#FFF8EF;
  padding-top: 20px 0;
}
.aesthetic_map_ul{
  width: 100%;
  overflow: auto;
  margin: 0px;
  padding: 0%;
}
.aesthetic_map_ul li{
  float: left;
  width: 33.33%;
  margin: 0%;
  padding: 0%;
  font-size: 0;
}
.aesthetic_map_ul li img{
  width: 100%;
}
.clear{
  clear: both ;
}
.submenu{
  background-color:#FFF8EF;
  text-align: center;
}
.submenu a{
  color: black;
  text-decoration:none;
}
.menu{
  width: 400px;
  padding: 30px 0;
  margin: 0% auto;
}
.menu a{
  font-size: 22px;
}
.menu_img{
  width: 1200px;
  margin: 0% auto;
}
.menu_img img{
  width: 90%;
}
.more{
  display: inline-block;
  width: 200px;
  height: 50px;
  line-height: 50px;
  font-size: 24px;
  border: 2px solid #E25111;
  border-radius:40px;
  color: #E25111 !important;
}
.consultation{
  width:100%;
  background-color:#FFF8EF;
  padding: 30px 0;
}
.delicious_consultation{
  width: 1200px;
  margin: 0% auto;
  text-align: center;
}
.food-info{
  color: black;
  text-decoration:none;
  width: 300px;
  margin: 0% auto;
}
.food-head{
  color: black;
  font-size: 20px;
}
.reserve{
  width:100%;
  background-color:#FFF8EF;
}
.reserve_background{
  background: url(../assets/index/images/reserve.jpg) no-repeat;
  -webkit-background-size: 100% 100%;
          background-size: 100% 100%;
  max-width: 100%;
  padding:20px 0 30px 0;
}
.reserve_background .el-input{
  width: 300px;
  background-color:transparent !important;
}
.el-input__inner{
  background-color:transparent !important;
}
.reserve_background p{
  color: white;
}
.reserve .reserve_botton{
  margin-top:20px; 
  display: inline-block;
  color: white;
  padding: 10px 0 ;
  width: 80px;
  background-color: #E25111;
  border-radius: 4px;
}
.footers{
  padding: 30px 0 20px 0;
  width: 100%;
  background-color: #2a1e13;
}
.footers .footer-tops{
  text-align: center;
  width: 400px;
  margin: 0% auto;
}
.footers .footer-tops a{
  color: white;
  font-size: 12px;
}
.footer-body{
  width: 420px;
  margin: 0% auto;
  text-align: center;
  font-size:11px;
  color: #ccc;
}
</style>
