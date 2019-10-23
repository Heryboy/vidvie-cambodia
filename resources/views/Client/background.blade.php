@extends('Client.common.layout') 

@section('content')
<!-- slide -->

	<div class="container padding-bottom-lg">
		<!-- index-home -->
		<div class="index-home">
			<center>
				<div class="padding-bottom-lg-extra wow fadeInLeft">
					<div class="title-page">BACKGROUND</div>
					<div class="line-row-event wow fadeInLeft">
			        	<div class="hr">&nbsp;</div>
			        </div>
			        <div class="clearfix"></div>
				</div>
			</center>

			<!-- menmber -->
			<div class="row">

				<div class="col-lg-12 col-sm-12 wow fadeInDown">
					<img src="{{url('images/home.jpg')}}" width="500px" align="left" style="padding-right:20px;">
					<p class="paragraph color-general">Thai  Ambassador  to  the  Kingdom  of  Cambodia,  H.E.  Mr.  Doumdech  Bunnark  inspired  Thai  business  persons  in  theKingdom  to  establish  Thai  Business  Council  of  Cambodia  to  provide  information  and  guidance  to  Thai  investorsinterested in doing business and/or invest in Cambodia.Thai  Business  Council  of  Cambodia  also  serves  as  communication  channel  between  the  embassy  and  Thai  Peopleresiding in Cambodia on issues important and on emergency situation.The Thai Business Council of Cambodia was successfully established on July 22, 1999 through the great support fromMr. Samrerng Traiukhoat, Minister Counselor of Comercial Affairs at that time.Prior to the creation of TBCC, there was a Thai investor group led by Bangkok Bank’s Manager, Mr. Nikom, and theSecond  Secretary  of  the  Royal  Thai  Embassy,  Mr.  Dusith  who  are  the  key  persons  to  established  and  draft  the  firstregulation of TBCC.Under the first presidency of Mr. Somsak Rinruengsin, Modern Plastic & Packaging Co., Ltd., TBCC had an office in hiscompany and later on during the term of Minister Counselor of Commercial Affairs, Mr. Bunnarith Kalayanmith, TBCCmoved to the Royal Thai Embassy up to today.Thai  Business  Council  of  Cambodia  changed  its  name  to  Thai  Business  Council  in  Cambodia  since  2014.    NowMrs.Oranooch  Pakarat,  Owner  and  Manager  of  Intra  Co  (Logistic  Company  in  Cambodia)  is  the  current  TBCCpresident for the year 2016-2017..</p>
				</div>
		       	
			</div>

			<!-- // menmber -->
		</div>
		<!-- //index-home -->	

		<div class="row">
		<!-- carousel -->
		@include('Client.common.carousel')
		<!-- //carousel -->
		</div>
	</div>

@endsection
