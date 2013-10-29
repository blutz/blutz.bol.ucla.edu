// Test functions for maze.cpp
// Copyright Byron Lutz 2011

#include <iostream>
#include <cassert>

using namespace std;


int main()
{
	int dist[10][10] = {
		99, 99, 99, 99, 99, 99, 99, 99, 99, 99,
		99, 99,  9,  8,  7,  6,  5,  6,  7, 99,
		99, 11, 10, 99,  6,  5,  4,  5,  6, 99,
		99, 12, 99, 99,  5, 99,  3, 99,  7, 99,
		99, 11, 99,  5,  4,  3,  2,  1, 99, 99,
		99, 10, 99,  6,  5, 99,  1,  0, 99, 99,
		99,  9,  8,  7, 99,  3,  2,  1,  2, 99,
		99, 10, 99, 99,  5,  4, 99,  2,  3, 99,
		99, 11, 12, 13, 99,  5,  6, 99,  4, 99,
		99, 99, 99, 99, 99, 99, 99, 99, 99, 99 };
	assert(countPaths(dist, 6, 8) == 1);
	assert(countPaths(dist, 3, 6) == 2);
	assert(countPaths(dist, 5, 3) == 4);
	assert(countPaths(dist, 1, 8) == 6);
	assert(countPaths(dist, 1, 4) == 8);
	assert(countPaths(dist, 3, 1) == 12);
	cout << "Passed all tests";
}