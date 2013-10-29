// Test functions for linear.cpp
// Copyright Byron Lutz 2011

#include <iostream>
#include <cassert>

using namespace std;

int main()
{
	// Test first four functions
	double a0[0];
	assert(!anyNegative(a0, 0) && countNegatives(a0, 0) == 0 && firstNegative(a0, 0) == -1
		   && indexOfMax(a0, 0) == -1);
	
	double a1[5] = {1, 2, 3, 4, 5};
	assert(!anyNegative(a1, 5) && countNegatives(a1, 5) == 0 && firstNegative(a1, 5) == -1
		   && indexOfMax(a1, 5) == 4);
	
	double a2[4] = {0, 1, 2, 3};
	assert(!anyNegative(a2, 4) && countNegatives(a2, 4) == 0 && firstNegative(a2, 4) == -1
		   && indexOfMax(a2, 4) == 3);
	
	double a3[5] = {-1, 0, 1, 2, 3};
	assert(anyNegative(a3, 5) && countNegatives(a3, 5) == 1 && firstNegative(a3, 5) == 0
		   && indexOfMax(a3, 5) == 4);
	
	double a4[6] = {9, 2, 1, -4, 3, 2};
	assert(anyNegative(a4, 6) && countNegatives(a4, 6) == 1 && firstNegative(a4, 6) == 3
		   && indexOfMax(a4, 6) == 0);
	
	double a5[3] = {4, 2, -2};
	assert(anyNegative(a5, 3) && countNegatives(a5, 3) == 1 && firstNegative(a5, 3) == 2
		   && indexOfMax(a5, 3) == 0);
	
	double a6[4] = {-1, -2, -3, -4};
	assert(anyNegative(a6, 4) && countNegatives(a6, 4) == 4 && firstNegative(a6, 4) == 0
		   && indexOfMax(a6, 4) == 0);
	assert(countNegatives(a6, 3) == 3);
	
	// Test includes()
	assert(includes(a1, 5, a0, 0));
	assert(!includes(a1, 0, a1, 1));
	assert(includes(a3, 5, a2, 4));
	assert(includes(a3, 2, a2, 1));
	assert(!includes(a3, 1, a6, 4));
	
	cout << "Passed all tests." << endl;
}
