<div class="email-row"><label>网站语言：</label> {{ $language or '' }}<br></div>
<div class="email-row"><label>客户姓名：</label> {{ $name or '' }}<br></div>
<div class="email-row"><label>客户电话：</label> {{ $phone or '' }}<br></div>
<div class="email-row"><label>客户邮箱：</label> {{ $email or '' }}<br></div>
<div class="email-row"><label>服务类型：</label> {{ $type or '' }}<br></div>
<div class="email-row"><label>目的地：</label> {{ $destination_type or '' }}<br></div>
<div class="email-row"><label>搬运类型：</label> {{ $moving_type or '' }}<br></div>
<div class="email-row"><label>宠物类型：</label> {{ $pet_type or '' }}<br></div>
<div class="email-row"><label>参与人数：</label> {{ $employees_involved or '' }}<br></div>
<div class="email-row"><label>起始地点：</label> {{ $from or '' }}<br></div>
<div class="email-row"><label>目的地点：</label> {{ $to or '' }}<br></div>
<div class="email-row"><label>搬运时间：</label> {{ $time or '' }}<br></div>
<div class="email-row"><label>了解渠道：</label> {{ $way or '' }}<br></div>
<style>
    .email-row { height:24px; line-height:24px; color: #444; font-size: 16px; }
    .email-row label { color: #bbb; }
</style>