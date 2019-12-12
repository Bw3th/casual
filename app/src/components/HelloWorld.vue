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
            <span><img src="..\assets\index\images\lunch.png" alt=""></span>
            <h2>中餐</h2>
            <p>公司目前经营的范围包括：电子商务平台开发技术支持、技术转让、运维技术服务大数据、云计算等。</p>
          </div>
        </el-col>
        <el-col :span="8">
          <div class="provide_services">
            <span><img src="..\assets\index\images\dinner.png" alt=""></span>
            <h2>晚餐</h2>
            <p>公司目前经营的范围包括：电子商务平台开发技术支持、技术转让、运维技术服务大数据、云计算等。</p>
          </div>
        </el-col>
        <el-col :span="8">
          <div class="provide_services">
            <span><img src="..\assets\index\images\coffee.png" alt=""></span>
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
          <el-col :span="24"><div><img width="100%" class="mdbanner" src="..\assets\index\images\mdbanner.jpg"></div></el-col>
        </el-row>
      </div>
      <div>
        <el-row>
          <el-col :span="10"><div style="margin-top:49%;"><span>每一种食物来源都经过我们的精挑细选，关于食材我们只选最天然、健康、优质的，只为一份对极致美味的追求，用心做好每一份菜，是我们不变的宗旨。</span></div></el-col>
          <el-col :span="14">
            <div>
              <ul class="aesthetic_map_ul">
                <li><img src="..\assets\index\images\mdlist1.jpg"></li>
                <li><img src="..\assets\index\images\mdlist2.jpg"></li>
                <li><img src="..\assets\index\images\mdlist3.jpg"></li>
                <li><img src="..\assets\index\images\mdlist4.jpg"></li>
                <li><img src="..\assets\index\images\mdlist5.jpg"></li>
                <li><img src="..\assets\index\images\mdlist6.jpg"></li>
                <li><img src="..\assets\index\images\mdlist7.jpg"></li>
                <li><img src="..\assets\index\images\mdlist8.jpg"></li>
                <li><img src="..\assets\index\images\mdlist9.jpg"></li>
                <li class="clear"></li>
              </ul>
            </div>
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
        require('..\assets\index\images\banner.jpg'),
        require('..\assets\index\images\banner2.jpg'),
        require('..\assets\index\images\banner3.jpg')
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
</style>
