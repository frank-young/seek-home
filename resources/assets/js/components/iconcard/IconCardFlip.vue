<template>
    <div class="icon-card-flip">
      <sub-title
        :title="'我们的优势'"
      >
      </sub-title>
      <div class="container">
          <div class="row">
              <div class="col-md-3 col-sm-6">
                  <div class="icon-card-item">
                      <i>1</i>
                      <h4>聚集精英   顶尖团队</h4>
                      <p>
                        西可品牌设计聚集了中国颇具实力与创新力的有为之士，是由众多知名院校毕业的拥有资深行业经验的视觉设计和品牌咨询精英组成的优秀团队。
                      </p>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6">
                  <div class="icon-card-item">
                      <i>2</i>
                      <h4>起源香港   知名品牌</h4>
                      <p>
                        西可品牌为香港西可品牌管理有限公司天津分公司，整合国际国内资源，目前在香港以投融资、金融业务为主；在内地开展品牌策略设计、创新创业咖啡、创投平台运营三方面业务。
                      </p>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6">
                  <div class="icon-card-item">
                      <i>3</i>
                      <h4>聚集精英   顶尖团队</h4>
                      <p>
                        服务客户有：清华大学、北京大学、北京大学天津校友会、天津大学、南开大学、
天津商业大学、市委宣传部、武清开发区、北辰开发区、滨海建投集团、天津互联网协会、招商银行、华夏银行、华夏未来幼儿园、华明集团、中冶天工、中粮集团、丰禾鼎太等。
对于不同客户，制定不同方案，项目无大小，认真对待每项设计，是西可的职责。
                      </p>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6">
                  <div class="icon-card-item">
                      <i>4</i>
                      <h4>携手清华   共创辉煌</h4>
                      <p>
                        清华工美由清华大学控股；在旅游规划设计、环境景观设计、建筑设计、室内设计、陈设艺术、工业设计、绘画和雕塑创作等领域，先后承接和完成了一大批国家重要项目，并广泛开展国际合作。
西可设计为清华美院实习基地，并为清华工美提供专业的品牌和环境导示服务。
                      </p>
                  </div>
              </div>
          </div>
      </div>
    </div>
</template>

<script>
    export default {
      name: 'icon-card',
      props: {
          data: Array
      }
    }
</script>

<style lang="less" scoped>
  .icon-card-flip {
    padding-top: 20px;
    padding-bottom: 80px;
    background-color: #f8f8f8;
    h3 {
      line-height: 1.8em;
      text-align: center;
      font-size: 24px;
      font-weight: 300;
      color: #333;
    }
    .icon-card-item {
      height: 100%;
      -webkit-transition: all .3s;
      transition: all .3s;
      i {
        display: block;
        width: 100px;
        height: 100px;
        margin: 0 auto;
        line-height: 1em;
        color: #30a4d7;
        border: 3px solid #30a4d7;
        border-radius: 50%;
        font-style: normal;
        font-size: 80px;
        font-weight: 300;
        text-align: center;
        -webkit-transition: all .3s;
        transition: all .3s;
      }
      h4 {
        margin-top: 40px;
        font-size: 20px;
        text-align: center;
      }
      p {
        margin-top: 20px;
        text-indent: 2em;
        line-height: 1.8em;
        font-size: 16px;
      }
      // &:hover {
      //   background-color: #30a4d7;
      // }
      // &:hover {
      //   h4 {
      //     color: #fff;
      //   }
      // }
    }
  }
</style>
