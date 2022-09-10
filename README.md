# php 5.x simple message board 📃

연휴 기념 연휴 기간내 간단 게시판 만들기 프로젝트 <br>
(추후 PHP7+ PHP8도 커밋 예정입니다.)

<br><br>


# TIL (Today I Learned) 📜

## 🍪 로그인 기능 구현 시 쿠키와 세션 중 어떤 걸 사용할까?

<br>

### ⚡ HTTP (Hypertext Transfer Protocol) 이란?
: HTTP는 서버와 클라이언트가 인터넷상에서 요청(request)과 응답(response)을 주고 받기 위한 프로토콜(protocol)이다.

### ⚡ HTTP 의 특징
✨ TCP/IP 를 이용하는 응용 프로토콜이다.
✨ HTTP 는 연결 상태를 유지하지 않는 비연결성(=무상태, Stateless) 프로토콜이다.

### ⚡ HTTP 의 장단점
✨ 장점 <br>
: 비연결성 프로토콜이기 때문에 클라이언트와 서버간의 최대 연결수보다 많은 요청과 응답을 처리할 수 있다.
✨ 단점 <br>
: 비연결성 프로토콜이기 때문에 요청이 끝난 후에 서버는 클라이언트의 이전 상황을 알 수 없는 무상태가 된다. 이런 Stateless 특징 때문에 정보를 유지하기 위해 쿠키(Cookie)와 세션(Session) 같은 기술이 등장했다.

<br>

### 🔥 쿠키 (Cookie)
: 클라이언트 측에서 로컬 웹 브라우저가 저장하는 데이터이다. 서버가 쿠키를 생성해서 클라이언트에 보내면, 클라이언트는 쿠키를 웹 브라우저에 Key-Value 형식으로 저장한다. 이후 클라이언트가 데이터를 요청시 헤더에 쿠키를 실어서 서버에 보내게 된다.

쿠키의 유효기간은 서버에서 설정하여 보낼 수 있다. 유효기간이 지나면 쿠키는 자동으로 소멸된다. 만약 유효기간을 설정하지 않는다면 웹 브라우저를 종료하는 순간 사라진다.

단순히 쿠키만으로 상태를 관리하면, 사용자의 개인정보가 클라이언트에 저장되어 있기 때문에, 위변조 및 도용 문제가 발생할 수 있고, 쿠키는 인증을 여러번 하지 않아 보안에 취약한데, 이를 보완하고자 세션(Session)을 사용한다.

<br>

### 🔥 세션 (Session)
: 세션은 웹 브라우저 당 1개씩 생성되어 웹 컨테이너에 저장되며 브라우저 종료시 소멸된다. 세션도 쿠키와 동일하게 클라이언트의 인증 정보를 저장하는데, 쿠키와 다른 점은 세션은 서버에 저장된다. 또한, 외부에서 세션 정보를 열람하여도 개인 로그인 정보와 매칭이 불가능하다.

즉, 쿠키와 동일하지만, 유출되어도 역으로 확인할 수 없는 정보를 담고 있어야 한다. 이를 위해서 쿠키를 활용하게 되는데, 서버에서 고유 세션 ID를 클라이언트에게 보내면 클라이언트는 이를 웹 브라우저에 저장하게 된다. 그 다음 인증을 위해서 클라이언트의 쿠케이 저장되어 있는 고유 세션 ID를 서버측에 보내게 된다.

<br>

## 🍪 정답은 세션, 그럼에도 쿠키가 중요한 이유는?
: 쿠키는 대규모 서비스에서 사용자 기반으로 부하 분산(load balancing)이 필요할 때 큰 역할을 한다.

<br>

## 🍪 세션 기반 사용자 인증
: 쿠키(cookie)와 세션(session)이 서로 대립한다고 생각하거나 세션이 쿠키를 대체하는 기술로 오해하면 안된다. 쿠키와 세션은 상호 보완을 하는 기술이라고 보는 것이 적절하다.

쿠키의 최대 단점은 브라우저에 저장하기 때문에 유실, 변조, 도난의 위험이 크다는 것이다.

쿠키 대비 세션의 장점은 서버 측에서 관리 되기 때문에 위와 같은 위험이 적다는 것이다.

그럼 서버 측에서 생성된 수 많은 세션이 어떤 사용자의 것인지 어떻게 알 수 있을까?

서버에서 세션을 생성하면 그 세션을 식별할 수 있는 식별자를 얻을 수 있다. 보통 이것을 세션 아이디라고 부르는데, 이 세션 아이디를 쿠키로 브라우저에 응답하는 방식을 사용하면, 브라우저는 매번 요청을 보낼 때마다 세션 아이디가 담긴 쿠키를 서버로 돌려 보낼 것이다. 그럼 서버에서는 세션 아이디에 해당하는 세션이 존재하는지만 확인해주면 된다.

<br>

## 🍪 세션과 쿠키를 이용한 자동 로그인 시나리오 세워보기

✨ 사용자가 입력한 아이디, 비밀번호, 자동로그인 체크박스 논리값을 입력 받는다.

✨ 사용자가 체크박스를 클릭했으면 쿠키에 사용자의 개인 세션값(세션 아이디)과 만료시간을 저장하여 사용자의 로컬 저장소에 저장시켜주고, DB에도 체크박스를 클릭한 회원의 세션값과 쿠키 만료시간을 저장해준다.

✨ 사용자가 홈페이지에 방문했을 때 로컬에 쿠키가 있는지 확인하고 쿠키가 있으면 쿠키값을 조회한다.

✨ 조회한 쿠키값이 회원의 세션값이므로 세션값을 통해 회원정보를 조회하여 회원정보를 로그인 유지 세션에 저장시켜준다.

✨ 쿠키 만료 시간동안은 브라우저를 닫아도 로그인 상태가 유지된다.