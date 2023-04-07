## 대소문자 바꾸

## 문제
## 길이가 N인 영어로 이루어진 문자열 S가 주어진다. 이 문자열 S가 철자가 대문자라면 소문자로, 소문자라면 대문자로 바꾸어서 출력하시오.

## 입력
## 첫째 줄에 문자열의 길이 N이 주어진다.
## 둘째 줄에 길이가 N인 문자열 S가 주어진다. 모든 문자열은 알파벳으로 이루어져있다. 
## 1 <= N <= 10000

## 출력예시
## - 입력 : 10
            goormLevel
## - 출력 : GOORMlEVEL

## - 입력 : 6
            commit
## - 출력 : COMMIT

## - 입력 : 1
            c
## - 출력 : C

<?php
	$n = fgets(STDIN);
	$text = fgets(STDIN);
	$upper_text = strtoupper($text);
	$answer = "";
	for($i=0; $i<$n; $i++){
		if($upper_text[$i] === $text[$i]){
			$answer .= strtolower($text[$i]);
		}else{
			$answer .= $upper_text[$i];
		}
	}
	echo $answer;
?>
