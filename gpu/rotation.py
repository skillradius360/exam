mport numpy as np
import matplotlib.pyplot as plt

# Define the coordinates of the triangle vertices
A = np.array([0, 0])
B = np.array([1, 1])
C = np.array([5, 2])


# Define the angle of rotation in degrees
angle_degrees = 45

# Function to rotate a point by an angle around the origin
def rotate_point(point, angle_degrees):
    angle_rad = np.radians(angle_degrees)
    rotation_matrix = np.array([[np.cos(angle_rad), np.sin(angle_rad)],
                                [-np.sin(angle_rad), np.cos(angle_rad)]])
    return np.dot(rotation_matrix, point)

# Function to plot the original triangle
def plot_triangle_ori(A, B, C, label=None):
    plt.plot([A[0], B[0]], [A[1], B[1]], 'r-')
    plt.plot([B[0], C[0]], [B[1], C[1]], 'r-')
    plt.plot([C[0], A[0]], [C[1], A[1]], 'r-')
    if label:
        plt.text(2, 2, label, fontsize=10, ha='left')

# Function to plot the roted triangle
def plot_triangle(A, B, C, label=None):
    plt.plot([A[0], B[0]], [A[1], B[1]], 'b-')
    plt.plot([B[0], C[0]], [B[1], C[1]], 'b-')
    plt.plot([C[0], A[0]], [C[1], A[1]], 'b-')
    if label:
        plt.text(2, -2, label, fontsize=10, ha='right')

# Plot the original triangle
plt.figure(figsize=(6, 6))
plot_triangle_ori(A, B, C, label='Original')

# Rotate the triangle and plot the rotated version
rotated_B = rotate_point(B, angle_degrees)
rotated_C = rotate_point(C, angle_degrees)
plot_triangle(A, rotated_B, rotated_C, label='Rotated')

# Set plot limits and labels
plt.xlim(-4, 6)
plt.ylim(-4, 6)
plt.xlabel('X-axis')
plt.ylabel('Y-axis')
plt.title('Rotated Triangle')
plt.grid(True)

# Show the plot
plt.show()