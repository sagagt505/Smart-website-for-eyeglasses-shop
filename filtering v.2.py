""" 
    R     : a matrix to be factorized, dimension N x M
    P     : an initial matrix of dimension N x K
    Q     : an initial matrix of dimension M x K
    K     : the number of latent features
    steps : the maximum number of steps to perform the optimisation
    alpha : the learning rate
    beta  : the regularization parameter

    result : the final matrices P and Q
"""



import numpy as np

def matrix_factorization(R, P, Q, K=2, steps=5000, alpha=0.0002, beta=0.02, tol=0.001):
    n, m = R.shape
    Q = Q.T
    for step in range(steps):
        for i in range(n):
            for j in range(m):
                if R[i][j] > 0:
                    eij = R[i][j] - np.dot(P[i,:], Q[:,j])
                    for k in range(K):
                        P[i][k] = P[i][k] + alpha * (2 * eij * Q[k][j] - beta * P[i][k])
                        Q[k][j] = Q[k][j] + alpha * (2 * eij * P[i][k] - beta * Q[k][j])
        eR = np.dot(P, Q)
        e = 0
        for i in range(n):
            for j in range(m):
                if R[i][j] > 0:
                    e = e + (R[i][j] - np.dot(P[i,:], Q[:,j])) ** 2
                    for k in xrange(K):
                        e = e + (beta/2) * (P[i][k] ** 2 + Q[k][j] ** 2) # total error
        if e < tol:
            break
    return P, Q.T

R = np.array([[0,0,0,0,0,0],  # user 1
              [0,0,0,0,0,0]]) # user 2
"""
R = np.array([[5,2,0,0,7,4],  # user 1
              [5,0,11,0,4,7]]) # user 2
"""
n, m = R.shape
K = 2 # latent variable

P = np.random.rand(n, K) # randomly create P, Q first
Q = np.random.rand(m, K)
P, Q = matrix_factorization(R, P, Q, K)
Rhat = np.dot(P, Q.T)

print Rhat
print 
print P
print
print Q
