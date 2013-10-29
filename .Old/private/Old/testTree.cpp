// Test functions for tree.cpp
// Copyright Byron Lutz 2011

#include <iostream>
#include <cassert>

using namespace std;

int main()
{
	double arr[7] = {10, 50, 40, 20, 50, 40, 30};
	double arr1[3] = {10, 20, 40};
	double arr2[3] = {10, 40, 30};
	double arr3[3] = {20, 10, 40};
	double arr4[3] = {50, 40, 30};
	assert(countIncludes(arr, 7, arr1, 3) == 1);
	assert(countIncludes(arr, 7, arr2, 3) == 2);
	assert(countIncludes(arr, 7, arr3, 3) == 0);
	assert(countIncludes(arr, 7, arr4, 3) == 3);

	double a1[5] = {2, 5, 4, 1, 3};
	order(a1, 5);
	for (int i = 0; i < 4; i++)
		assert(a1[i] >= a1[i+1]);
	
	double a2[1] = {2};
	order(a2, 1);
	assert(a2[0] == 2);
	
	double a3[8] = {0, 1, 1, 1, 2, 3, 4, 4};
	order(a3, 8);
	for (int i = 0; i < 8; i++)
		assert(a3[i] >= a3[i+1]);

	cout << "Passed all tests.";
}