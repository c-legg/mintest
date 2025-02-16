## 题目背景

Legg 有点困了，所以他想让你和他做个游戏。

## 题目描述

Legg 给你一个整数 $x$，你要求出 $x$ 的两倍并把这个数输出到屏幕上。

## 输入格式

共一行，一个整数 $x$，$\mid x\mid\le 10^9$。

## 输出格式

共一行，一个整数，$x$ 的两倍。

## 输入输出样例

### 样例 #1

#### 输入

```
12
```

#### 输出

```
24
```

## 说明

本题提供标程：

### C++

``` cpp
#include <bits/stdc++.h>
using namespace std;

int main() {
    long long x;
	cin>>x;
	cout<<2*x;
	return 0;
}
```

### Python

``` py
x=int(input())
print(2*x)
```

### C

``` c
#include <stdio.h>

int main()
{
    long long x;
	scanf("%lld", &x);
	printf("%lld\n", 2*x);
}
```