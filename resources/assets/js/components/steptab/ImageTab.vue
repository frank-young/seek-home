<template>
    <div class="step-tab">
        <div class="row">
                <div class="col-md-12">
                  <div class="tab-content">
                      <div role="tabpanel" class="tab-pane" :class="{active: index===0}" :id="'tab-' + index" v-for="(image,index) in images">
                        <img :src="'/storage/' + image.src" alt="">
                      </div>
                  </div>
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" :class="{active: index===0}"  v-for="(image,index) in images">
                      <a :href="'#tab-' + index" :aria-controls="'tab-' + index" role="tab" data-toggle="tab">
                        <img :src="'/storage/' + image.src" alt="">
                      </a>
                    </li>
                </ul>

                </div>
            </div>
    </div>
</template>

<script>
    export default {
      props: {
          data: Object
      },
      data () {
        return {
          images: []
        }
      },
      created () {
        this.images = JSON.parse(this.data.img_path_arr)
      }
    }
</script>

<style lang="less" scoped>
.step-tab {
  height: 680px;
  margin-top: 30px;
  .nav-tabs {
      border-bottom: 0;
      li {
        & > a {
            display: inline-block;
            width: 100px;
            height: 80px;
            margin-right: 10px;
            margin-bottom: 15px;
            padding: 0;
            border-radius: 5px;
            outline: none;
            cursor: pointer;
            overflow: hidden;
            &:hover,
            &:active,
            &:focus {
                background-color: transparent;
                border-color: transparent;
                background-color: transparent;
            }
            &:hover {
              img {
                -webkit-transform: scale(1.05);
                transform: scale(1.05);
              }
            }
            img {
              width: 100%;
              height: 100%;
              -webkit-transition: all .3s;
              transition: all .3s;
            }
        }
        &.active {
          & > a {
            background-color: #fff;
            border: 3px solid #30a4d7;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            box-shadow: 5px 5px 10px #ccc;
          }
        }
      }
  }
  .tab-content {
    margin-bottom: 50px;
    overflow: hidden;
    border-radius: 10px;
    box-shadow: 5px 5px 15px #ccc;
    .tab-pane {
      img {
        width: 100%;
      }
    }
  }
}
</style>
