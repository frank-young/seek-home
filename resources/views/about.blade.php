@extends('layouts.app')

@section('content')
<split-box-header
  :title="'关于我们'"
>
</split-box-header>

<div class="about-wrap">
  <div class="row p-t-b-100 min-h">
    <div class="col-md-12">
      <div class="logo-wrap">
        <!-- <img src="img/logo.jpg" alt="logo"> -->
        <h3>
          西可（天津）品牌设计有限公司
        </h3>
      </div>
      <h3>
        西可（天津）品牌设计有限公司信仰专业的力量，用优秀的设计创作品牌，用品牌的力量驱动企业的持续发展。
      </h3>
    </div>
  </div>
  <!-- <div class="bg-section min-h">
    <div class="container p-t-b-100">
      <div class="row">
        <div class="col-md-12">
          <h3>
            西可（天津）品牌设计有限公司
          </h3>
          <p>
            源于香港，以投融资、金融业务为主，在大陆市场致力于开展品牌策略设计、创新创业咖啡、创投平台运营三方面业务，范围主要包括：品牌战略咨询、品牌识别设计、品牌体验表现（环境、导示、网站、包装）、品牌广告推广等专业产品与服务。
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="container p-t-b-100 min-h">
    <div class="row">
      <div class="col-md-12">
        <h3>
          西可（天津）品牌设计有限公司
        </h3>
        <p>
          通过国际化的设计和品牌管理之道，帮助客户构建卓越的品牌体系，协助更多的企业塑造国际化的品牌形象，使企业在业界树立独特的品牌形象。
        </p>
      </div>
    </div>
  </div>
  <div class="bg-section">
    <div class="container p-t-b-100">
      <div class="row">
        <div class="col-md-12">
          <h3>
            西可（天津）品牌设计有限公司的客户
          </h3>
          <p>
            包括政府（大型园区：天津北辰开发区、泰达大健康产业园、武清开发区）（政府活动宣传：2010年世博会、2012年大运会、2013年东亚运动会、2017年全运会等）、各大高校（天津大学、天津商业大学）、知名企业（中粮集团、中冶天工、奔驰、华为、邮政、华夏银行、腾讯）等。
          </p>
        </div>
      </div>
    </div>
  </div> -->
</div>

<sub-title
  :title="'我们能做什么'"
>
</sub-title>

<icon-card></icon-card>

<icon-card-flip></icon-card-flip>

<sub-title
  :title="'项目工作流程'"
>
</sub-title>

<step-tab>
</step-tab>


<split-box-footer
  :title="'Life is seeking，生活总是在追求和探索'"
  :text="'联系我们：022-58095866'"
>
</split-box-footer>


@endsection
