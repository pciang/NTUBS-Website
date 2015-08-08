<div data-ng-app="ntubs-app" data-ng-controller="ntubs-committees" class="container-fluid" style="margin: 0 0 20px; padding: 0;">
	<ul class="nav nav-tabs visible-xs">
		<li role="presentation" class="dropdown">
			<a class="dropdown-toggle glyphicon glyphicon-menu-hamburger" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"></a>
			<ul class="dropdown-menu">
				<li data-ng-repeat="committee in ntubs_committees"><a href="#" data-ng-click="select(committee.nth)">{{ committee.nth }}th Management Committee</a></li>
			</ul>
		</li>
	</ul>
	<div class="row col-condensed">
		<div class="col-sm-4 col-md-3 hidden-xs">
			<ul class="nav nav-pills nav-stacked">
				<li role="presentation" data-ng-repeat="committee in ntubs_committees"><a href="#" data-ng-click="select(committee.nth)">{{ committee.nth }}th Management Committee</a></li>
			</ul>
		</div>
		<div class="col-sm-8 col-md-9 col-xs-12">
			<img class="img-responsive" alt="{{ selected_committee.nth }}th Management Committee" src="{{ selected_committee.fullTeamPhoto }}" />
			<div class="row col-condensed" data-ng-repeat="member in selected_committee.team" style="margin: 15px auto; ">
				<div class="col-xs-4"><img class="img-responsive" alt="{{ member.fullName }}" src="{{ member.photo }}" /></div>
				<div class="col-xs-7 col-xs-offset-1" style="font-size: 16px; line-height: 20px; height: 100%;">
					<address style="margin-top: 20px; ">
						<strong>{{ member.fullName }}</strong><br />
						<em>{{ member.position }}</em><br />
					</address>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
var ntubs_committees = [{
	nth: 32,
	fullTeamPhoto: 'img/32nd mc.jpg',
	team: [{
		fullName: 'Freddy',
		position: 'President',
		photo: 'img/president-freddy.png'
	}, {
		fullName: 'Foo Si Hui',
		position: 'Vice President (Event)',
		photo: 'img/vpe-si hui.png'
	}, {
		fullName: "Andy",
		position: "Vice President (Dharma)",
		photo: "img/andy.png"
	}, {
		fullName: "Tew Hong Boon",
		position: "Honorary General Secretary",
		photo: "img/hongen-ivan.png"
	}, {
		fullName: "Herdiyenty Howard",
		position: "Honorary Treasurer",
		photo: "img/haha.png"
	}, {
		fullName: "Evando",
		position: "Event Director",
		photo: "img/evando.png"
	}, {
		fullName: "Su Thiri Tun",
		position: "Metta Director",
		photo: "img/thiri.png"
	}, {
		fullName: "Raymond Tanadi",
		position: "Orientation Director",
		photo: "img/raymond.png"
	}, {
		fullName: "Naing Htoo Aung",
		position: "Dharma Propagation Director",
		photo: "img/92.png"
	}, {
		fullName: "Chan Yen Wei",
		position: "Fellowship Director",
		photo: "img/crystal.png"
	}, {
		fullName: "Huynh Phuong Thao",
		position: "Publication Director",
		photo: "img/thao.png"
	}, {
		fullName: "Kenrick",
		position: "Resource Director",
		photo: "img/kenrick.png"
	}, {
		fullName: "Lee Su Ann",
		position: "Business Director",
		photo: "img/su ann.png"
	}, {
		fullName: "Kelvin Teheri",
		position: "Marketing Director",
		photo: "img/teheri.png"
	}, {
		fullName: "Jefferson",
		position: "Public Relation",
		photo: "img/pr-jeff.png"
	}]
}, {
	nth: 31,
	fullTeamPhoto: 'img/31stMC.jpg',
	team: [{
		fullName: 'Chew Ze Yong',
		position: 'President',
		photo: 'img/zeyong.png'
	}, {
		fullName: 'Josephine Hendrikson',
		position: 'Vice President (Event)',
		photo: 'img/josephine.png'
	}, {
		fullName: "Benny Febriansyah",
		position: "Vice President (Dharma)",
		photo: "img/benny.png"
	}, {
		fullName: "Rizky Wirawan Pratama",
		position: "Honorary General Secretary",
		photo: "img/Rizky.png"
	}, {
		fullName: "Tan Xin Wen",
		position: "Honorary Treasurer",
		photo: "img/xinwen.png"
	}, {
		fullName: "Kang Chun Hee",
		position: "Event Director",
		photo: "img/chun hee.png"
	}, {
		fullName: "Foo Si Hui",
		position: "Metta Director",
		photo: "img/si hui.png"
	}, {
		fullName: "Le Quang Luan",
		position: "Orientation Director",
		photo: "img/longko.png"
	}, {
		fullName: "Andy",
		position: "Dharma Propagation Director",
		photo: "img/andy.png"
	}, {
		fullName: "Aryani Paramita",
		position: "Fellowship Director",
		photo: "img/aryani.png"
	}, {
		fullName: "Shienny Karwita Tailan",
		position: "Publication Director",
		photo: "img/shienny.png"
	}, {
		fullName: "Tew Hong Boon",
		position: "Resource Director",
		photo: "img/ivan.png"
	}, {
		fullName: "Jefferson",
		position: "Business Director",
		photo: "img/jeff.png"
	}, {
		fullName: "Freddy",
		position: "Marketing Director",
		photo: "img/freddy.png"
	}, {
		fullName: "Martin",
		position: "Public Relation",
		photo: "img/martin.png"
	}]
}];

var ntubs_app = angular.module("ntubs-app", []);
ntubs_app.controller("ntubs-committees", function ($scope) {
	$scope.ntubs_committees = ntubs_committees;
	$scope.selected_committee = ntubs_committees[0];

	$scope.select = function (nth) {
		ntubs_committees.forEach(function (committee) {
			if(committee.nth == nth) $scope.selected_committee = committee;
		});
	};
});
</script>