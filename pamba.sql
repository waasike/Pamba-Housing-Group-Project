-- phpMyAdmin SQL -- Host: 127.0.0.1 -- Database: `pamba_db`

-- Table structure for table `register`
CREATE TABLE `register` (
  `id` int(11), 
  `firstname` varchar(10),
  `lastname` varchar(10),
  `email` varchar(40),
  `password` varchar(20),
  `mpesaname` varchar(100)
)

INSERT INTO `register` (`id`, `firstname`, `lastname`, `email`, `password`, `mpesaname`) VALUES
(1, 'Mitchelle', 'Wasike', 'waasike@gmail.com', 'password1', 'MITCHELLE WASIKE');


-- Indexes for table `register`

ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD KEY `firstname` (`firstname`),
  ADD KEY `lastname` (`lastname`),
  ADD KEY `email` (`email`),
  ADD KEY `password` (`password`),
  ADD KEY `mpesaname` (`mpesaname`);


-- AUTO_INCREMENT for table `register`

ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;
